<?php

namespace App\Livewire;

use App\Models\Banner;
use App\Models\Category;
use App\Models\CompanyReview;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
// use Livewire\WithPagination;

#[Title('Home')]
class HomePage extends Component
{
    #[Rule("required", message: "Please,Enter a email")]
    #[Rule("email", message: "Please,Enter a valid email")]
    public $email;

    #[Rule("required", message: "Please,Enter a name")]
    #[Rule("string", message: "Name contain only letter and space")]
    public $name;
    // use WithPagination;

    // public $email;
    public $subject;

    #[Rule("required", message: "Please, Write something")]
    #[Rule("string", message: "Message should be contain only letter and space")]
    public $msg;

    public $user_id;
    public $post_success_msg;
    public $post_error_msg;


    public function mount(){
        if($user = auth()->user()){
            $this->name = $user->name;
            $this->email = $user->email;
            $this->user_id = $user->id;
        }
    }

    public function post(){
        $this->validate();
// dd($this->name,$this->email,$this->subject,$this->msg);
       $insert = CompanyReview::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'msg' => $this->msg,
            'user_id' => $this->user_id,
        ]);
        if($insert){
            $this->post_success_msg = 'Your post is successfully submitted';
             $this->name = '';
            $this->email = '';
            $this->subject = '';
            $this->msg = '';
           $this->user_id = '';
        }else{
            $this->post_error_msg = "Something went wrong";
        }
    }
    public function render()
    {
        $pd = Product::orderBy('views')->get();
        $n['new_arrival'] = $pd->whereBetween('created_at',[Carbon::now()->subDays(7),Carbon::now()]);
        $n['features'] = $pd;
        $n['dpds'] = $pd->take(5);
        $n['menus'] = Category::with('child_cat')->where('status', 'active')->where('is_parent', 1)->orderBy('title', 'ASC')->get();
        $n['home_banner'] = Banner::where('status', 'active')->where('slug', 'home-page')->first();

        return view('livewire.home-page',$n);
    }
}
