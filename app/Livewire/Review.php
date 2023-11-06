<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Reviews')]

class Review extends Component
{
    public function render()
    {
        return view('livewire.review');
    }
}
