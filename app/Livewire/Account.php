<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Account')]
class Account extends Component
{
    public function routeChange()
    {
        $this->redirect(route('user.login'));
    }
    public function render()
    {
        if(!auth()->user()){
            $this->routeChange();
        }
        return view('livewire.account');
    }
}
