<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FiltroClaseInmueble extends Component
{
    public $clase= '';
    public function render()
    {


        return view('livewire.filtro-clase-inmueble');
    }
}
