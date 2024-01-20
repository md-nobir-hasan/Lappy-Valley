<?php

namespace App\Livewire;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Reset Password')]

class ResetPassword extends Component
{
    #[Rule("required", message: "Please,Enter a password")]
    #[Rule("min:6", message: "Password should be at least 6 character long")]
    public $password;

    #[Rule("same:password", message: "Password confirmation doesn't match")]
    public $confirmed;

    public function save()
    {
        $this->validate();
        $email = Session::get('femail');
       $user = User::where('email',$email)->first();
       $user->update([
            'password' => Hash::make($this->password),
       ]);

       Auth::login($user);
        return $this->redirect(route('account'), navigate: true);
    }
    public function render()
    {
        return view('livewire.reset-password');
    }
}
