<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class HomePage extends Component
{
    public function render()
    {
        $n['products'] = Product::get();
        // dd($n);
        return view('livewire.home-page',$n);
    }
}
