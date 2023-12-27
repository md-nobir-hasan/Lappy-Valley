<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show User']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->ccan('Show User');

        $n['users']=User::orderBy('id','ASC')->paginate(10);
        $n['count'] = User::get();
        return view('backend.auser.users.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->ccan('Create User');

        $n['roles'] = Role::all();
        return view('backend.auser.users.create',$n);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->ccan('Create User');

        $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'email'=>'string|required|unique:users',
            'password'=>'string|required',
            'role'=>'required',
            'status'=>'required|in:active,inactive',
            'photo'=>'nullable|string',
        ]);
        // dd($request->all());
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        // dd($data);
        $status= User::create($data);
        // dd($status);
        $status->syncRoles($request->role);
        if($status){
            request()->session()->flash('success','Successfully added user');
        }
        else{
            request()->session()->flash('error','Error occurred while adding user');
        }
        return redirect()->route('auser.users.index');

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
        $this->ccan('Edit User');

        $n['user']=User::findOrFail($id);
        $n['roles'] = Role::all();
        return view('backend.auser.users.edit',$n);
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
        $this->ccan('Edit User');

        $user=User::findOrFail($id);
        $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'email'=>'string|required',
            'role'=>'required',
            'status'=>'required',
            'photo'=>'nullable|string',
        ]);
        // dd($request->all());
        $data=$request->all();
        // dd($data);

        $status= $user->fill($data)->save();
        // dd($status);
        if($status){
            $user->syncRoles($request->role);
            request()->session()->flash('success','Successfully updated');
        }
        else{
            request()->session()->flash('error','Error occured while updating');
        }
        return redirect()->route('auser.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ccan('Delete User');

        $delete=User::findorFail($id);
        $status=$delete->delete();
        if($status){
            request()->session()->flash('success','User Successfully deleted');
        }
        else{
            request()->session()->flash('error','There is an error while deleting users');
        }
        return redirect()->route('auser.users.index');
    }
}
