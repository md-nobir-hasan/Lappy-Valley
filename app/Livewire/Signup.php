<?php

namespace App\Livewire;

use App\Mail\PasswordSendMail;
use App\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Signup')]
class Signup extends Component
{
    public $email;
    public function save(){
        // User::create(
        //     $this->only(['email'])
        // );
        Mail::to($this->email)->send(new PasswordSendMail($this->email));
        // dd("Your password is send to $this->email");
        session()->flash('success', "Password has been sent to $this->email");
        return $this->redirect(HomePage::class, navigate: true);
    }
    public function render()
    {
        return view('livewire.signup');
    }
}
