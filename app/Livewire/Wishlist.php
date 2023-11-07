<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Wishlist')]

class Wishlist extends Component
{
    public function render()
    {
        return view('livewire.wishlist');
    }
}
