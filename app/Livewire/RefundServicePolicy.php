<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Refunc And Service Policy')]
class RefundServicePolicy extends Component
{
    public function render()
    {
        return view('livewire.refund-service-policy');
    }
}
