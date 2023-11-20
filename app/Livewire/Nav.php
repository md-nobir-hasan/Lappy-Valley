<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Nav extends Component
{
    public $menus;
    public function mount(){
        $this->menus = Category::with('child_cat')->where('status', 'active')->where('is_parent', 1)->orderBy('serial', 'ASC')->get();
    }
    public function render()
    {
        return view('livewire.nav');
    }
}
