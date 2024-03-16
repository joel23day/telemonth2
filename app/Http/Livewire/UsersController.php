<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name, $phone, $profile, $email, $status, $image, $password, $selected_id, $fileLoaded, $role;
    public $PageTitle, $nombre_componente, $search;
    private $pagination = 3;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount()
    {
        $this->PageTitle = 'Listado';
        $this->nombre_componente = 'Usuarios';
        $this->status = 'Elegir';
        $this->profile = 'Elegir';
    }
    public function render()
    {
        if(strlen($this->search) > 0)
           $data = User::where('nombre', 'like', '%' . $this->search . '%')
           ->select('*')->orderBy('nombre', 'asc')->paginate($this->pagination);
        else
           $data = User::select('*')->orderBy('nombre', 'asc')->paginate($this->pagination);

        return view('livewire.users.component', [
            'data' => $data,
            'roles' => Role::orderBy('name', 'asc')->get()
        ])
        ->extends('layouts.theme.app')
        ->section('content');


    }

    public function resetUI()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->phone = '';
        $this->image = '';
        $this->search = '';
        $this->status = 'Elegir';
        $this->selected_id = 0;
        $this->resetValidation();
        $this->resetPage();
    }

    public function edit(User $user)
    {
        $this->selected_id = $user->id;
        $this->name = $user->nombre;
        $this->phone = $user->telefono;
        $this->profile = $user->cargo;
        $this->status = $user->estado;
        $this->email = $user->email;
        $this->password = '';

        $this->emit('show-modal','open!');

    }

    protected $listeners = [
        'deleteRow' => 'destroy',
        'resetUI' => 'resetUI'
    ];

    public function Store()
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'status' => 'required|not_in:Elegir',
            'profile' => 'required|not_in:Elegir',
            'password' => 'required|min:3'

        ];
        $messages = [
            'name.required' => 'Ingresa el nombre',
            'name.min' => 'El nombre del usuario debe tener al menos 3 caracteres',
            'email.required' => 'Ingrese el correo',
            'email.email' => 'Ingresa un correo valido',
            'email.unique' => 'El email ya existe en el sistema',
            'status.required' => 'Selecciona el estado del usuario',
            'status.not_in' => 'Selecciona el estado',
            'profile.required' => 'Selecciona el cargo/o rol del usuario',
            'profile.not_in' => 'Selecciona un cargo/o rol distinto a Elegir',
            'password.required' => 'Ingresa el password',
            'password.min' => 'El password debe tener al menos 3 caracteres'

        ];

        $this->validate($rules, $messages);
        //dd($this->profile);
        $user = User::create([
            'nombre' => $this-> name,
            'email' => $this->email,
            'telefono' => $this->phone,
            'estado' => $this->status,
            'cargo' => $this->profile,
            'password' => bcrypt($this->password)
        ]);
        //$user->assingRole($this->profile);
        //dd($user);
        $user->syncRoles($this->profile);
        //$user->assignRole($this->profile);

        if($this->image){
            $customFileName = uniqid() . ' _.' . $this->image->extension();
            $this->image->storeAs('public/users', $customFileName);
            $user->image = $customFileName;
            $user->save();
        }
        $this->resetUI();
        $this->emit('user-added', 'Usuario Registrado');
    }

    public function Update()
    {
        $rules = [
            'email' => "required|email|unique:users,email,{$this->selected_id}",
            'name' => 'required|min:3',
            'status' => 'required|not_in:Elegir',
            'profile' => 'required|not_in:Elegir',
            'password' => 'required|min:3',

        ];
        $messages = [
            'name.required' => 'Ingresa el nombre',
            'name.min' => 'El nombre del usuario debe tener al menos 3 caracteres',
            'email.required' => 'Ingrese el correo',
            'email.email' => 'Ingresa un correo valido',
            'email.unique' => 'El email ya existe en el sistema',
            'status.required' => 'Selecciona el estado del usuario',
            'status.not_in' => 'Selecciona el estado',
            'profile.required' => 'Selecciona el perfil/role del usuario',
            'profile.not_in' => 'Selecciona un perfil/role distinto a Elegir',
            'password.required' => 'Ingresa el password',
            'password.min' => 'El password debe tener al menos 3 caracteres'

        ];

        $this->validate($rules, $messages);

        $user = User::find($this->selected_id);
        $user->update([
            'nombre' => $this-> name,
            'email' => $this->email,
            'telefono' => $this->phone,
            'estado' => $this->status,
            'cargo' => $this->profile,
            'password' => bcrypt($this->password)
        ]);

        $user->syncRoles($this->profile);
        //$user->assignRole($this->profile);

        if($this->image){
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/users', $customFileName);
            $imageTemp = $user->image;
            $user->image = $customFileName;
            $user->save();

            if($imageTemp != null)
            {
                if(file_exists('storage/users/' . $imageTemp)) {
                    unlink('storage/users/' .$imageTemp);
                }
            }
        }
        $this->resetUI();
        $this->emit('user-updated', 'Usuario Actualizadoo');
    }

    public function destroy(User $user)
    {
        if($user){
            $sales = Venta::where('usuario_id', $user->id)->count();
            if($sales > 0) {
                $this->emit('user-withsales','No es posible eliminar el usuario por que tiene ventas registradas');
            } else {
                $user->delete();
                $this->resetUI();
                $this->emit('user_deleted', 'Usuario eliminado');
            }
        }
    }

    public function ToggleUserStatus($userId, $checked)
{
    $user = User::find($userId);

    if ($user) {
        $user->estado = $checked ? 'Active' : 'Locked';
        $user->save();
    }
}
}
