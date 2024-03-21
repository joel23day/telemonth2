<?php

namespace App\Http\Livewire;

use App\Models\Anuncio;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ModalanController extends Component
{
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
        if (strlen($this->search) > 0) {
            $anuncios = Anuncio::where('nombre', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        } else {
            $anuncios = Anuncio::orderBy('id', 'desc')->paginate($this->pagination);
        }

        return view('livewire.anuncios.modal', ['anuncios' => $anuncios])
        ->extends('layouts.theme.app3')
        ->section('content');



    }


}
