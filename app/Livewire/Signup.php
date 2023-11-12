<?php

namespace App\Livewire;

use App\Mail\PasswordSendMail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    #[Rule("required", message: "Please,Enter a password")]
    #[Rule("string")]
    #[Rule("min:6", message: "Password should be at least 6 character long")]
    public $password;

    #[Rule("same:password", message: "Password confirmation doesn't match")]
    public $confirmed;

    public function routeChange()
    {
        if (Auth::user()) {
            $this->redirect(url()->previous(), navigate: true);
        }
    }

    public function save(){
        $this->validate();
       $user =  User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        Auth::login($user);
        // Mail::to($this->email)->send(new PasswordSendMail($this->email));
        session()->flash('success', "Your account is successfully created");
        return $this->redirect(HomePage::class, navigate: true);
    }
    public function render()
    {
            $this->routeChange();
            return view('livewire.signup');


    }
}
