<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Search')]

class Search extends Component
{
    public function render()
    {
        return view('livewire.search');
    }
}
