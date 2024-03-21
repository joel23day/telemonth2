<?php

namespace App\Http\Livewire;

use App\Models\Dato2;
use Livewire\Component;
use Illuminate\Http\Request;

class WhatsapController extends Component
{
    // public $nombre, $email, $message;

public function store(Request $request)
    {
        // Validar los datos del formulario si es necesario

        $dato = new Dato2();
        $dato->nombre = $request->name;
        $dato->email = $request->email;
        $dato->message = $request->message;



        // Construir la URL con los datos guardados
        $url = 'https://wa.me/59174044123?text=Nombre:' . urlencode($dato->nombre) . '%0AEmail:' . urlencode($dato->email) . '%0AAsunto:' . urlencode($dato->message);

        // Redirigir automáticamente a la URL
        return redirect()->to($url);
    }
}
