<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostTag;
use Illuminate\Support\Str;
class PostTagController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Tag']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->ccan('Show Tag');
        $n['count'] = PostTag::get();
        $n['postTags']=PostTag::orderBy('id','DESC')->paginate(10);
        return view('backend.posttag.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->ccan('Create Tag');

        return view('backend.posttag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->ccan('Create Tag');

        $this->validate($request,[
            'title'=>'string|required',
            'status'=>'required|in:active,inactive'
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=PostTag::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $status=PostTag::create($data);
        if($status){
            request()->session()->flash('success','Post Tag Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('post-tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->ccan('Edit Tag');

        $postTag=PostTag::findOrFail($id);
        return view('backend.posttag.edit')->with('postTag',$postTag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->ccan('Edit Tag');

        $postTag=PostTag::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
            'title'=>'string|required',
            'status'=>'required|in:active,inactive'
        ]);
        $data=$request->all();
        $status=$postTag->fill($data)->save();
        if($status){
            request()->session()->flash('success','Post Tag Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('post-tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ccan('Delete Tag');

        $postTag=PostTag::findOrFail($id);

        $status=$postTag->delete();

        if($status){
            request()->session()->flash('success','Post Tag successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting Tag tag');
        }
        return redirect()->route('post-tag.index');
    }
}
