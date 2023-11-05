<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Account')]
class Account extends Component
{
    public function render()
    {
        return view('livewire.account');
    }
}
