<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('OTP Confirmation')]

class OtpConfirm extends Component
{
    public function render()
    {
        return view('livewire.otp-confirm');
    }
}
