<?php

namespace App\Livewire;

use App\Mail\PasswordSendMail;
use App\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Signup')]
class Signup extends Component
{
    #[Rule("required", message:"Please,Enter a email")]
    #[Rule("email", message:"Please,Enter a valid email")]
    #[Rule("unique:users,email", message:"You have an account. Please, login.")]
    public $email;

    public function save(){
        $this->validate();

        User::create($this->only(['email']));
        Mail::to($this->email)->send(new PasswordSendMail($this->email));
        session()->flash('success', "Password has been sent to $this->email");
        return $this->redirect(HomePage::class, navigate: true);
    }
    public function render()
    {
        return view('livewire.signup');
    }
}
