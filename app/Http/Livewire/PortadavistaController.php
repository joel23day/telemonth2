<?php

namespace App\Http\Livewire;

use App\Models\Portada;
use Livewire\Component;


class PortadavistaController extends Component
{


    public function render()
    {
        $portadas = Portada::all();
        // dd($portadas);

        return view('livewire.portadavista.component', [

            'data' => $portadas,
        ])
        ->extends('layouts.theme.app3')
        ->section('content');
    }
}
