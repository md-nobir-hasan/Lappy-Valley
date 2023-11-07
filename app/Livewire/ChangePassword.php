<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Change Password')]

class ChangePassword extends Component
{
    public function render()
    {
        return view('livewire.change-password');
    }
}
