<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Privacy Policy')]
class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.privacy-policy');
    }
}
