<?php

namespace App\Livewire;

use App\Mail\PasswordSendMail;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Forget Password')]

class ForgetPassword extends Component
{
    #[Rule("required", message: "Please,Enter a email")]
    #[Rule("email", message: "Please,Enter a valid email")]
    #[Rule("exists:users,email", message: "No account by this email. Please, register.")]
    public $email;
    public function save()
    {
        $this->validate();
        Mail::to($this->email)->send(new PasswordSendMail($this->email));
      
        session()->flash('success', "Your account is successfully created");
        return $this->redirect(ConfirmPassword::class, navigate: true);
    }

    public function render()
    {
        return view('livewire.forget-password');
    }
}
