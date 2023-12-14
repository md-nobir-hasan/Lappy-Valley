<?php

namespace App\Livewire;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Change Password')]

class ChangePassword extends Component
{
    public $old_password;

    #[Rule("required", message: "Please,Enter a password")]
    #[Rule("string")]
    #[Rule("min:6", message: "Password should be at least 6 character long")]
    public $password;

    #[Rule("same:password", message: "Password confirmation doesn't match")]
    public $confirmed;

    public $err_msg;
    public $msg;
    public function save(){
        $user = User::find(auth()->user()->id);
        if(Hash::check($this->old_password,$user->password)){
            $this->err_msg = "";
            $this->msg = "";
            $this->validate();
            $user->update(['password'=>Hash::make($this->password)]);
            $this->msg = 'Password successfully changed';
            $this->err_msg = '';
            $this->old_password = '';
            $this->password = '';
            $this->confirmed = '';
        }else{
            $this->err_msg = "Old password don't match";
            $this->msg = "";
        }

    }
    public function render()
    {
        return view('livewire.change-password');
    }
}
