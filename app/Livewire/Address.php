<?php

namespace App\Livewire;

use App\Models\UserAddress;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Address')]

class Address extends Component
{

    #[Rule("required", message: "Please, write your address")]
    #[Rule("string", message: "Please, enter a valid address")]
    public $address;

    #[Rule("required", message: "Please, write your city")]
    #[Rule("string", message: "Please, enter a valid city")]
    public $city;

    #[Rule("required", message: "Please, enter your phone number")]
    #[Rule("numeric", message: "Please, enter a valid phone number")]
    public $post_code;

    public $is_default;
    public $msg;
    public $err_msg;
    public function save(){
        dd($this->all());
        UserAddress::create($this->all());
    }
    public function render()
    {

        return view('livewire.address');
    }
}
