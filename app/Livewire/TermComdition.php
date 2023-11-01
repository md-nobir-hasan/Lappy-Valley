<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Terms And Conditions')]
class TermComdition extends Component
{
    public function render()
    {
        return view('livewire.term-comdition');
    }
}
