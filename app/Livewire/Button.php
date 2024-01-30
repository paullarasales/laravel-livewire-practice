<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{

    public function Clicked() {
        dd("clicked");
    }

    public function render()
    {
        return view('livewire.button');
    }
}
