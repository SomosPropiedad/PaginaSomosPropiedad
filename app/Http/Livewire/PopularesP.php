<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PopularesP extends Component
{
    public $populares;
    
    public function render()
    {
        return view('livewire.populares-p');
    }
}
