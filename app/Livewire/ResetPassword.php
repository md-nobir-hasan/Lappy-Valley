<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Reset Password')]

class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.reset-password');
    }
}
