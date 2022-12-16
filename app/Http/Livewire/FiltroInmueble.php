<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FiltroInmueble extends Component
{
    public $clase= '';
    public $tipoc= '';
    public $ubicacion ='';
    public function render()
    {

        $api = Http::get('https://www.softinm.co/api/inmuebles/listar/811008756/somospropiedad?cantidadporpagina=12&order=fecha_ofrecer_inmueble&type_order=desc'.$this->clase.$this->tipoc.$this->ubicacion);
        $inmuebles = $api->json() ;




        return view('livewire.filtro-inmueble', compact('inmuebles'));
    }
}
