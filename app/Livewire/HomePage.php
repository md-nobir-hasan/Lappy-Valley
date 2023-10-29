<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class HomePage extends Component
{
    public $lps=[1,1,1,1,1];
    public function render()
    {
        return view('livewire.home-page');
    }
}
