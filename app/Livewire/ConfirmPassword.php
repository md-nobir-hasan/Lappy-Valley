<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Confirm Password')]

class ConfirmPassword extends Component
{
    #[Rule("required", message: "Please,Enter a code")]
    #[Rule("integer", message: "Please,Enter a valid code")]
    public $otp;

    public $msg;
    public function save()
    {

        $this->validate();
        if ($this->otp == Session::get('opt')) {
            $this->redirect(ResetPassword::class, navigate: true);
        }else{
            $this->msg = "Otp don't mass";
        }
    }
public function resend(){
         
}
    public function render()
    {

        return view('livewire.confirm-password');
    }
}
