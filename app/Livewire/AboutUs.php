<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('About Us')]

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.about-us');
    }
}
