<?php

namespace App\Http\Livewire;

use App\Models\Anuncio;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AnunciosController extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $nombre, $descripcion, $status, $search, $fecha_inicio, $fecha_fin, $categoryid, $image,
    $instructorid, $pageTitle, $nombre_componente, $selected_id;
    private $pagination =5;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->nombre_componente = 'Anuncios';
        $this->categoryid = 'Elegir';
    }

    public function render()
  {
      if(strlen($this->search)>0)
      $data = Anuncio::where('nombre','like', '%' .$this->search . '%')->paginate($this->pagination);
      else
      $data = Anuncio::orderBy('id','desc')->paginate($this->pagination);

      return view('livewire.anuncios.component',['anun' => $data])
      ->extends('layouts.theme.app')
      ->section('content');
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

    $category = Anuncio::create([
       'nombre' =>$this-> nombre,
       'descripcion' => $this->descripcion,
       'status' => $this->status,
          'fecha_inicio' => $this-> fecha_inicio,
          'fecha_fin' => $this-> fecha_fin,
    ]);


    if($this->image)
    {
     $customFileName = uniqid(). '_.' . $this->image->extension();
     $this->image->storeAs('public/anuncios', $customFileName);
     $category->imagen = $customFileName;
     $category->save();
    }

    $this->resetUI();
    $this->emit('closemodal', 'Producto Actualizado');
    $this->emit('cat_added', 'Curso Añadido');
 }

    public function Edit(Curso $cur)
    {
         $this->selected_id = $cur->id;
         $this->nombre = $cur->nombre;
         $this->descripcion = $cur->descripcion;
         $this->fecha_inicio = $cur->fecha_inicio;
         $this->fecha_fin = $cur->fecha_fin;
         $this->status = $cur->status;
         $this->categoryid = $cur->categoria_id;
         $this->instructorid = $cur->instructor_id;
         $this->image = null;


        $this->emit('show-modal','show modal');
    }

    public function Update(){
        $rules = [
           //'nombre' => "required|min:3|unique:categorias,nombre,($this->selected_id)",
           'nombre' => 'required|min:3',

        ];

        $messages = [
          'nombre.required' => 'Nombre de categoria requerido',
          'nombre.min' => 'El nombre de la categorai debe tener almenos 3 caracteres',
          //'nombre.unique' => 'El nombre de categoria ya existe',
        ];

        $this->validate($rules, $messages);

        $curso = Curso::find($this->selected_id);
        $curso->Update([
          'nombre' => $this->nombre,
          'descripcion' => $this->descripcion,
          'instructor' => $this->instructorid,
          'categoria' => $this->categoryid,
          'estado' => $this->status,
          'fecha_inicio' => $this->fecha_inicio,
          'fecha_fin' => $this->fecha_fin
        ]);

        if($this->image){
          $customFileName = uniqid() . '_.' . $this->image->extension();
          $this->image->storeAs('public/cursos', $customFileName);

          $imageName = $curso->image;
          $curso->image = $customFileName;
          $curso->save();

          if($imageName != null){
            if(file_exists('storage/instructores' . $imageName)){
              unlink('storage/instructores' . $imageName);
            }
          }
        }

        $this->resetUI();
        $this->emit('closemodal', 'datos Actualizado');
        $this->emit('cat_updated', 'Datos Actualizados');
      }

    public function resetUI()
    {
        $this->nombre = '';
        $this->descripcion = '';
        $this->status = 'Elegir';
        $this->image = null;
        $this->search = '';
        $this->selected_id = 0;
    }
}
