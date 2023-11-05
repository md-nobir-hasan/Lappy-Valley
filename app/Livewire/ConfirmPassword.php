<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Confirm Password')]

class ConfirmPassword extends Component
{
    public function render()
    {
        return view('livewire.confirm-password');
    }
}
