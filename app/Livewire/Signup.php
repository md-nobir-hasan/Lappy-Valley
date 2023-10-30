<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Signup')]
class Signup extends Component
{
    public $email;
    public function save(){
        dd($this->email);
    }
    public function render()
    {
        return view('livewire.signup');
    }
}
