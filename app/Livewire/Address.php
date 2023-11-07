<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Address')]

class Address extends Component
{
    public function render()
    {
        return view('livewire.address');
    }
}
