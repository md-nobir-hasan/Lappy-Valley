<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Role']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->ccan('Show Role');

        $n['roles'] = Role::with('permissions')->paginate(10);

        return view('backend.auser.role.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Role');

        $n['permissions'] = Permission::get();
        return view('backend.auser.role.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $this->ccan('Create Role');

      try{
            $role = Role::create($request->only(['name']));
            $rper = $role->syncPermissions($request->permissions);
            request()->session()->flash('success', "$request->name is created successfully");
      }catch(\Exception $e){
            request()->session()->flash('error', "Unable to create role");
      }

       return redirect()->route('auser.role.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $this->ccan('Delete Role');

        $n['permissions'] = Permission::get();
        $n['role'] = $role;

        return view('backend.auser.role.edit',$n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $this->ccan('Delete Role');

        try {
            $role->update($request->only(['name']));
           $role->syncPermissions($request->permissions);
            request()->session()->flash('success', "$request->name is updated successfully");
        } catch (\Exception $e) {
            request()->session()->flash('error', "Unable to create role");
        }

        return redirect()->route('auser.role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->ccan('Delete Role');

        $role->delete();
        request()->session()->flash('success', "The role is deleted successfully");
        return redirect()->route('auser.role.index');
    }

    public function permission(){
        $this->ccan('Show Permission');
        $n['permissions'] = Permission::all();
        return view('backend.auser.permission.index',$n);
    }
}
