<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Checkout')]

class Checkout extends Component
{
    public function render()
    {
        return view('livewire.checkout');
    }
}
