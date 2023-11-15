<?php

namespace App\Livewire;

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
        // dd($n);
        return view('livewire.home-page',$n);
    }
}
