<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('View Cart')]

class ViewCart extends Component
{
    public function render()
    {
        return view('livewire.view-cart');
    }
}
