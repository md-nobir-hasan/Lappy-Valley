<?php

namespace App\Livewire;

use App\Models\CompanyReview;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Review Post')]
class ReviewPost extends Component
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

    #[Rule("required", message: "Please, Write a message")]
    #[Rule("string", message: "Message should be contain only letter and space")]
    public $msg;

    public $user_id;
    public $post_success_msg;
    public $post_error_msg;

    public function mount()
    {
        if ($user = auth()->user()) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->user_id = $user->id;
        }
    }

    public function render()
    {
        $n['posts'] = DB::table('company_reviews')
            ->where('status', 'active')
            ->get();


        if (auth()->user()) {
            $this->name = auth()->user()->name;
            $this->email = auth()->user()->email;
        }

        $n['reviews'] = CompanyReview::with(['user'])->where('status', 'active')->latest()->get();
        return view('livewire.review-post',$n);
    }
}
