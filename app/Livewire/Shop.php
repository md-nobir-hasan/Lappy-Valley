<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\Attributes\Title;
#[Title('Shop')]
class Shop extends Component
{
    public function render()
    {
        return view('livewire.shop');
    }
}
