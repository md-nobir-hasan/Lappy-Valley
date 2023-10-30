<?php

namespace App\Livewire;

use App\User;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Signup')]
class Signup extends Component
{
    public $email;
    public function save(){
        User::create(
            $this->only(['email'])
        );
        return $this->redirect(route('home'), navigate: true);
    }
    public function render()
    {
        return view('livewire.signup');
    }
}
