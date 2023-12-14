<?php

namespace App\Livewire;

use App\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Edit Profile')]

class EditProfile extends Component
{
    #[Rule("required", message: "Please, write your first name")]
    #[Rule("string", message: "Please, enter a valid name")]
    public $name ;

    #[Rule("required", message: "Please, write your last name")]
    #[Rule("string", message: "Please, enter a valid name")]
    public $l_name;

    #[Rule("required", message: "Please, enter an email")]
    #[Rule("email", message: "Please,Enter a valid email")]
    // #[Rule("exists:users,email,id,", message: "This email already have an account. Please, enter another email.")]
    public $email;

    #[Rule("required", message: "Please, enter your phone number")]
    #[Rule("numeric", message: "Please, enter a valid phone number")]
    public $phone;

    public $msg;
    public $err_msg;
    public function save(){
        $this->msg = '';
        $this->err_msg = '';
        $this->validate();
        if($this->email == auth()->user()->email){
            User::find(auth()->user()->id)->update($this->all());
            $this->msg = 'Profile updated successfully';
        }else{
            $user= User::where('email',$this->email)->first();
            if($user){
                $this->err_msg = 'This email already exist';
            }else{
                User::find(auth()->user()->id)->update($this->all());
                $this->msg = 'Profile updated successfully';
            }
        }

    }
    public function render()
    {
        if(!$this->name){
            $this->name = auth()->user()->name;
            $this->email = auth()->user()->email;
            $this->l_name = auth()->user()->l_name;
            $this->phone = auth()->user()->phone;
        }

        return view('livewire.edit-profile');
    }
}
