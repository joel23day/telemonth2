<?php

namespace App\Http\Livewire;

use App\Models\Servicio;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ServiciosController extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $nombre, $search, $image, $selected_id, $pageTitle, $nombre_componente, $descripcion;
    private $pagination = 5;
    public $customFileName;

    public function mount(){
      $this->pageTitle = 'Listado';
      $this->nombre_componente = 'Servicios';
    }

    public function paginationView()
    {
      return 'vendor.livewire.bootstrap';
    }

  public function render()
  {
      if(strlen($this->search)>0)
      $data = Servicio::where('nombre','like', '%' .$this->search . '%')->paginate($this->pagination);
      else
      $data = Servicio::orderBy('id','desc')->paginate($this->pagination);

      return view('livewire.servicios.servicios',['servi' => $data])
      ->extends('layouts.theme.app')
      ->section('content');
  }

//   public function Edit($id){
//     $record = Servicio::find($id, ['id','nombre','image']);
//     $this->nombre=$record->nombre;
//     $this->selected_id=$record->id;
//     $this->image=null;

//     $this->emit('show-modal','show modal');
//   }

  public function Edit(Servicio $cur)
    {
         $this->selected_id = $cur->id;
         $this->nombre = $cur->nombre;
         $this->descripcion = $cur->descripcion;
         $this->image = null;


        $this->emit('show-modal','show modal');
    }

  public function Store(){
     $rules = [
       'nombre' => 'required|unique:servicios|min:3',
       'descripcion' => 'required'
     ];
     $messages = [
        'nombre.required' => 'Nombre de la categorias es requerido',
        'nombre.unique' => 'La categoria ya existe',
        'nombre.min' => 'La categoria debe tener almenos 3 caracteres',
        'descripcion.required' => 'Ingresa una descripcion para este curso',
     ];

     $this->validate($rules, $messages);

     $category = Servicio::create([
        'nombre' =>$this-> nombre,
        'descripcion' => $this->descripcion
     ]);


     if($this->image)
     {
      $customFileName = uniqid(). '_.' . $this->image->extension();
      $this->image->storeAs('public/servicios', $customFileName);
      $category->imagen = $customFileName;
      $category->save();
     }

     $this->resetUI();
     $this->emit('closemodal', 'Producto Actualizado');
     $this->emit('cat_added', 'Curso Añadido');
  }

  public function Update(){
    $rules = [
       'nombre' => "required|min:3|unique:categorias,nombre,($this->selected_id)"
    ];

    $messages = [
      'nombre.required' => 'Nombre de categoria requerido',
      'nombre.min' => 'El nombre de la categorai debe tener almenos 3 caracteres',
      'nombre.unique' => 'El nombre de categoria ya existe'
    ];

    $this->validate($rules, $messages);

    $category = Servicio::find($this->selected_id);
    $category->Update([
      'nombre' => $this->nombre
    ]);

    if($this->image){
      $customFileName = uniqid() . '_.' . $this->image->extension();
      $this->image->storeAs('public/servicios', $customFileName);

      $imageName = $category->image;
      $category->image = $customFileName;
      $category->save();

      if($imageName != null){
        if(file_exists('storage/servicios' . $imageName)){
          unlink('storage/servicios' . $imageName);
        }
      }
    }

    $this->resetUI();
    $this->emit('closemodal', 'Producto Actualizado');
  }

  public function resetUI(){
     $this->nombre = '';
     $this->image = null;
     $this->search = '';
     $this->selected_id = 0;
  }

  protected $listeners = [
       'deleteRow' => 'Destroy'
  ];


  public function Destroy(Servicio $category){
      //$category = Categoria::find($id);
      //dd($category);
      $imageName = $category->image;  //imagen temporal
      $category->delete();

      if($imageName != null){
        unlink('storage/servicios/' . $imageName);
      }

      $this->resetUI();
      $this->emit('category-deleted', 'Servicio Eliminado');
  }
}
