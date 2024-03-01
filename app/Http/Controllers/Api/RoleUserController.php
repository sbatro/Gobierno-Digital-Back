<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role_user;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    
    public function index()
    {
        $rolesUsers = Role_user::all();
        return $rolesUsers;
    }

    public function store(Request $request)
    {
        $roleUser = new Role_user();
        $roleUser->user_id = $request->user_id;
        $roleUser->role_id = $request->role_id;

        $roleUser->save();
    }
    public function show($id)
    {
        $roleUser = Role_user::find($id);
        return $roleUser;
    }

    public function update(Request $request, $id)
    {
        $roleUser = Role_user::findOrFail($request->id);
        $roleUser->user_id = $request->user_id;
        $roleUser->role_id = $request->role_id;
        $roleUser->save();
        return $roleUser;
    }

    public function destroy($id)
    {
        $roleUser = Role_user::destroy($id);

        return $roleUser;
    }
}
