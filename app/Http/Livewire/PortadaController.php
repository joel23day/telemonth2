<?php

namespace App\Http\Livewire;

use App\Models\Portada;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class PortadaController extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $nombre, $search, $image, $selected_id, $pageTitle, $nombre_componente, $descripcion;
    private $pagination = 5;
    public $customFileName;

    public function mount(){
      $this->pageTitle = 'Listado';
      $this->nombre_componente = 'Portadas';
    }

    public function paginationView()
    {
      return 'vendor.livewire.bootstrap';
    }

  public function render()
  {
      if(strlen($this->search)>0)
      $data = Portada::where('nombre','like', '%' .$this->search . '%')->paginate($this->pagination);
      else
      $data = Portada::orderBy('id','desc')->paginate($this->pagination);

      return view('livewire.portada.component',['port' => $data])
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

  public function Edit(Portada $cur)
    {
         $this->selected_id = $cur->id;
         $this->nombre = $cur->nombre;
         $this->image = null;


        $this->emit('show-modal','show modal');
    }

  public function Store(){
     $rules = [
       'nombre' => 'required|unique:servicios|min:3'
     ];
     $messages = [
        'nombre.required' => 'Nombre de la categorias es requerido',
        'nombre.unique' => 'La categoria ya existe',
        'nombre.min' => 'La categoria debe tener almenos 3 caracteres'
     ];

     $this->validate($rules, $messages);

     $category = Portada::create([
        'nombre' =>$this-> nombre,
     ]);


     if($this->image)
     {
      $customFileName = uniqid(). '_.' . $this->image->extension();
      $this->image->storeAs('public/portadas', $customFileName);
      $category->imagen = $customFileName;
      $category->save();
     }

     $this->resetUI();
     $this->emit('closemodal', 'Portada Actualizada');
     $this->emit('cat_added', 'Portada Añadida');
  }

  public function Update(){
    $rules = [
       'nombre' => "required|min:3|unique:nombre,($this->selected_id)"
    ];

    $messages = [
      'nombre.required' => 'Nombre de categoria requerido',
      'nombre.min' => 'El nombre de la categorai debe tener almenos 3 caracteres',
      'nombre.unique' => 'El nombre de categoria ya existe'
    ];

    $this->validate($rules, $messages);

    $category = Portada::find($this->selected_id);
    $category->Update([
      'nombre' => $this->nombre
    ]);

    if($this->image){
      $customFileName = uniqid() . '_.' . $this->image->extension();
      $this->image->storeAs('public/portadas', $customFileName);

      $imageName = $category->image;
      $category->image = $customFileName;
      $category->save();

      if($imageName != null){
        if(file_exists('storage/portadas' . $imageName)){
          unlink('storage/portadas' . $imageName);
        }
      }
    }

    $this->resetUI();
    $this->emit('closemodal', 'Portada Actualizada');
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


  public function Destroy(Portada $category){
      //$category = Categoria::find($id);
      //dd($category);
      $imageName = $category->image;  //imagen temporal
      $category->delete();

      if($imageName != null){
        unlink('storage/portdas/' . $imageName);
      }

      $this->resetUI();
      $this->emit('category-deleted', 'Portada Eliminada');
  }
}
