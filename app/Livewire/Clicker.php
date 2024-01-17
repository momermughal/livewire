<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{

    public $count = 0;

    public function check(){
        dump('here');
    }

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.clicker');
    }
}
