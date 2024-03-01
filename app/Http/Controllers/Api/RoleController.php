<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return $roles;
    }

    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->description = $request->description;
        
        $role->save();
    }

    public function show($id)
    {
        $role =Role::find($id);
        return $role;
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($request->id);
        $role -> name = $request->name;
        $role -> slug = $request->slug;
        $role -> description = $request->description;

        $role->save();
        return $role;
    }

 
    public function destroy($id)
    {
        $role = Role::destroy($id);
        return $role;
    }
}
