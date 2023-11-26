<?php

namespace App\Livewire;

use App\Mail\PasswordSendMail;
use Illuminate\Support\Facades\Mail;
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
    public $resent_msg;
    public function save()
    {
        $this->validate();
        if ($this->otp == Session::get('fotp')) {
            $this->redirect(ResetPassword::class, navigate: true);
        }else{
            $this->msg = "Otp don't match";
        }
    }
    public function resend(){
        $email = Session::get('femail');
        Mail::to($email)->send(new PasswordSendMail($email));
        $this->resent_msg = "Otp code is send again to $email";
    }

    public function render()
    {

        return view('livewire.confirm-password');
    }
}
