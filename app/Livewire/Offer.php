<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Offers')]

class Offer extends Component
{
    public function render()
    {
        $n['offers'] = Product::with('ProductOffer')->where('product_offer_id','!=',null)->where('status','active')->orderBy('id','desc')->paginate(12);
        return view('livewire.offer',$n);
    }
}
