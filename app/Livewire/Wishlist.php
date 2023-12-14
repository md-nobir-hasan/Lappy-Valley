<?php

namespace App\Livewire;

use App\Models\Wishlist as ModelsWishlist;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Wishlist')]

class Wishlist extends Component
{
    public function render()
    {
        $n['wishlists'] = ModelsWishlist::where('user_id',auth()->user()->id)->get();
        return view('livewire.wishlist',$n);
    }
}
