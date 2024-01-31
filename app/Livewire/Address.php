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

    public function addressSave(){
        $address = UserAddress::where('user_id', auth()->user()->id)->first();
        if($address){
            $address->update($this->all());
            $this->msg = 'Address successfully updated';
            $this->err_msg = '';
        }else{
            $data = $this->all();
            $data['user_id'] = auth()->user()->id;
            UserAddress::create($data);
            $this->msg = 'Address successfully saved';
            $this->err_msg = '';
        }
        // dd($address);
    }

    public function render()
    {
       $address = UserAddress::where('user_id',auth()->user()->id)->where('is_default',true)->first();
        if($address){
            $this->address = $address->address;
            $this->city = $address->city;
            $this->post_code = $address->post_code;
            $this->is_default = $address->is_default;
        }
        return view('livewire.address');
    }
}
