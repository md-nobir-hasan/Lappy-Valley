<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Offers')]

class Offer extends Component
{
    public function render()
    {
        return view('livewire.offer');
    }
}
