<?php

namespace App\Livewire;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;



class Login extends Component
{
    #[Title('Login')]

    #[Rule("required", message: "Please,Enter a email")]
    #[Rule("email", message: "Please,Enter a valid email")]
    public $email;

    #[Rule("required", message: "Please,Enter a password")]
    #[Rule("string")]
    public $password;

    #[Rule("same:password", message: "Password confirmation doesn't match")]
    public $confirmed;

    public $check_msg;
    public $success_msg;

    public function routeChange()
    {
        if(Auth::user()){
            $this->redirect(url()->previous(),navigate:true);
        }
    }


    public function login(){
        $user = User::where('email',$this->email)->first();
        if($user){
            if (Hash::check($user->password,$this->password)) {
                $this->check_msg = "Worng Password";
                return false;
            }else{
                Auth::login($user);
                $this->success_msg = "Login Successfull.....";
                return $this->redirect(route('account'), navigate: true);
            }
        } else {
            $this->check_msg = "You have no account. Please, register";
            return false;
        }
    }

    public function render()
    {
        $this->routeChange();

        return view('livewire.login');
    }
}
