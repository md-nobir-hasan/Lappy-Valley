<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Edit Profile')]

class EditProfile extends Component
{
    public function render()
    {
        return view('livewire.edit-profile');
    }
}
