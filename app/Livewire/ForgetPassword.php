<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Forget Password')]

class ForgetPassword extends Component
{
    public function render()
    {
        return view('livewire.forget-password');
    }
}
