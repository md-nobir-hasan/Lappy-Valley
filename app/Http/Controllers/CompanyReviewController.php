<?php

namespace App\Http\Controllers;

use App\Models\CompanyReview;
use App\User;
use Illuminate\Http\Request;

class CompanyReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Review']);
    }

    public function index()
    {
        $this->ccan('Show Review');

        $n['reviews'] = CompanyReview::latest()->paginate(10);
        $n['count'] = CompanyReview::get();
        return view('backend.review.index', $n);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $this->ccan('Create Review');

        // $this->validate($request, [
        //     'rate' => 'required|numeric|min:1'
        // ]);
        $product_info = CompanyReview::getProductBySlug($request->slug);
        //  return $product_info;
        // return $request->all();
        $data = $request->all();
        $data['product_id'] = $product_info->id;
        $data['user_id'] = $request->user()->id;
        $data['status'] = 'active';
        // dd($data);
        $status = CompanyReview::create($data);

        $user = User::where('role', 'admin')->get();
        $details = [
            'title' => 'New Product Rating!',
            'actionURL' => route('product-detail', $product_info->slug),
            'fas' => 'fa-star'
        ];
        Notification::send($user, new StatusNotification($details));
        if ($status) {
            request()->session()->flash('success', 'Thank you for your feedback');
        } else {
            request()->session()->flash('error', 'Something went wrong! Please try again!!');
        }
        return redirect()->back();
    }

    public function show($id)
    {
        $n['review'] = CompanyReview::with('user')->find($id);
        return view('backend.review.show', $n);
    }

    public function edit($id)
    {
        $this->ccan('Edit Review');

        $review = CompanyReview::find($id);
        // return $review;
        return view('backend.review.edit')->with('review', $review);
    }

    public function update(Request $request, $id)
    {
        $this->ccan('Edit Review');

        $request->validate([
            'name'=> 'required|string',
            'subject'=> 'nullable|string',
            'msg'=> 'required|string',
            'status'=> 'required|in:active,inactive',
        ]);
        $review = CompanyReview::find($id);

        if ($review) {
           $review->status = $request->status;
           $review->name = $request->name;
           $review->subject = $request->subject;
           $review->msg = $request->msg;
           $status = $review->save();
            if ($status) {
                request()->session()->flash('success', 'Review Successfully updated');
            } else {
                request()->session()->flash('error', 'Something went wrong! Please try again!!');
            }
        } else {
            request()->session()->flash('error', 'Review not found!!');
        }

        return redirect()->route('review.index');
    }

    public function destroy($id)
    {
        $review = CompanyReview::find($id);
        if(!$review){
            return back();
        }
        $status = $review->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted review');
        } else {
            request()->session()->flash('error', 'Something went wrong! Try again');
        }
        return redirect()->route('review.index');
    }
}
