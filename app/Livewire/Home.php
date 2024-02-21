<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $soma = 1+1;
    public function render()
    {
        
        
        return view('livewire.home');
    }
}
