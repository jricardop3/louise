<?php

namespace App\Livewire;
use Livewire\Attributes\Title;

use Livewire\Component;
class Home extends Component
{
    public $soma = 1+1;

    public function increment()
    {
        $this->soma++;
    }
 
    public function decrement()
    {
        $this->soma--;
        
    }
    #[Title('Home')]
    public function render()
    {
        
        
        return view('livewire.home');
    }
}
