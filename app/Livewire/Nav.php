<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Nav extends Component
{
    public $block;
    public function show($num)
    {
        $this->block = $num;
    }

    public function render()
    {
        $n['menus'] = Category::with(['child_cat', 'products', 'child_cat.sub_products'])->where('status', 'active')->where('is_parent', 1)->orderBy('serial', 'ASC')->get();
        if (count($n['menus']) > 7) {
            $n['menus'] = $n['menus']->take(7);
        }
        return view('livewire.nav', $n);
    }
}
