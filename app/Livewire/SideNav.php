<?php

namespace App\Livewire;

use Livewire\Component;

class SideNav extends Component
{
    public $price_range=25;
    public function render()
    {
        return view('livewire.side-nav');
    }

}
