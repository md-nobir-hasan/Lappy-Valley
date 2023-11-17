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
        $n['menus'] = Category::where('status', 'active')->orderBy('title', 'ASC')->get()->groupBy('parent_id');
        // dd($n);
        // dd($n);
        return view('livewire.home-page',$n);
    }
}
