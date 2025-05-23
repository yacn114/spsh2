<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("crud.listRole", ["roles"=> Role::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("crud.createRole",[
            "permission"=>Permission::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create(['name'=>$request->get("name")]);
        if($request->get("Permission") == ["all"]){
            $role->permissions()->sync(Permission::all());
        }else{
        $role->permissions()->sync($request->get("Permission"));
        }
        return redirect()->back()->with("success","نقش ساخته شد و دسترسی ها داده شد");
    
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        
        return view("crud.editRole", [
        "role"=>$role
    ,    "permission"=>Permission::all(),
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update(['name'=>$request->get("name")]);
        if($request->get("Permission") == ["all"]){
            $role->permissions()->sync(Permission::all());
        }else{
        $role->permissions()->sync($request->get("Permission"));
        }
        return redirect()->back()->with("success","نقش ساخته شد و دسترسی ها داده شد");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();
        return redirect()->back()->with("success","deleted !");
    }
}
