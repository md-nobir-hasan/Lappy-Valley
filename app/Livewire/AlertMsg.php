<?php

namespace App\Livewire;

use Livewire\Component;

class AlertMsg extends Component
{
    public $bg_color;
    public $color;
    public function render()
    {
        return view('livewire.alert-msg');
    }
}
