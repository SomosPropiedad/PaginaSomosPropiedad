<?php

namespace App\Http\Livewire;

use App\Models\Inmuebles;
use Livewire\Component;

class SliderInmueble extends Component
{
    public $inmuebles;
    public function render()
    {
        
        return view('livewire.slider-inmueble');
    }
}
