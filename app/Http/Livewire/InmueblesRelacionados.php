<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class InmueblesRelacionados extends Component
{
    public $clase = '';
    public $relacionados;
    public function render()
    {


        return view('livewire.inmuebles-relacionados');
    }
}
