<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class HomePage extends Component
{

    public function render()
    {
        $pd = Product::orderBy('views')->get();
        $n['new_arrival'] = $pd->whereBetween('created_at',[Carbon::now()->subDays(7),Carbon::now()]);
        $n['features'] = $pd;
        $n['dpds'] = $pd->take(5);
        $n['menus'] = Category::with('child_cat')->where('status', 'active')->where('is_parent', 1)->orderBy('title', 'ASC')->get();
       
        return view('livewire.home-page',$n);
    }
}
