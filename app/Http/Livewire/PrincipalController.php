<?php

namespace App\Http\Livewire;

use App\Models\Servicio;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class PrincipalController extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name, $phone, $profile, $email, $status, $image, $password, $selected_id, $fileLoaded, $role;
    public $pageTitle, $componentName, $search, $search2, $search3, $old_permissions = [], $showDataTable = false;
    public $file, $message;
    public $selectedprofile;
    public $importedData = [], $previewData = [];
    private $pagination = 5;
    public $activeTab = 'listado'; // Pestaña activa por defecto
    //public $usuarios;
    public $selectedOption = 'Elegir';
    public $checkboxTodos;
    public $checkboxEspecifico;
    public $seleccurso;
    public $curso;

// Resto de tu componente...

    //public $eleccionado = 'Elegir';



    public $tabs = [
        'listado' => 'Listado',
        'subir' => 'Subir Usuarios',
    ];
    public $showForm = true; // Agrega esta variable
    public $formType = 'component';


    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Usuarios';
        $this->status = 'Elegir';
        $this->profile = 'Elegir';
        $this->role = 'Elegir';
        $this->checkboxTodos = false;
        $this->checkboxEspecifico = false;
    }
    public function render()
    {

       $servicios = Servicio::all();

        return view('livewire.principal.principal', [

            'data' => $servicios,
        ])
        ->extends('layouts.theme.app3')
        ->section('content');




    }
}
