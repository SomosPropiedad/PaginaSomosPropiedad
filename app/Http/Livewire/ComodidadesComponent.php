<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComodidadesComponent extends Component
{
    public $inmueble;
    
    public function render()
    {
        return view('livewire.comodidades-component');
    }
}
