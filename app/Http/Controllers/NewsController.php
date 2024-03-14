<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['can:Show News']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->ccan('Show News');
        $n['count'] = News::get();
        $n['data']=News::orderBy('serial','DESC')->paginate();
        return view('backend.news.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->ccan('Create News');

        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->ccan('Create News');

        $this->validate($request,[
            'title'=>'string|required',
            'serial'=>'number|nullable',
        ]);

        $data=$request->all();
        if(!$request->serial){
            $news = DB::table('news')->orderBy('serial','desc')->first();
            $data['serial'] = $news->serial + 1 ;
        }

        $status=News::create($data);

        if($status){
            request()->session()->flash('success','News successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('news.index');
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
        $this->ccan('Edit News');

        $news=News::find($id);
        if(!$news){
            request()->session()->flash('error','News not found');
        }
        return view('backend.news.edit')->with('datum',$news);
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
        $this->ccan('Edit News');

        $news=News::find($id);
        $this->validate($request,[
            'title'=>'string|required',
        ]);
        $data=$request->all();

        $status=$news->fill($data)->save();
        if($status){
            request()->session()->flash('success','News successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ccan('Delete News');

        $news=News::find($id);
        if($news){
            $status=$news->delete();
            if($status){
                request()->session()->flash('success','News successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('news.index');
        }
        else{
            request()->session()->flash('error','News not found');
            return redirect()->back();
        }
    }
}
