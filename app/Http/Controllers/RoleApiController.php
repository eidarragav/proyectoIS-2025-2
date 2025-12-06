<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleApiController extends Controller
{
    public function store(Request $request){
        $role = new Role();
        $role->role_name = $request->role_name;
        $role->save();
        
        return response()->JSON($role, 201);
    }

    public function index(){
        $roles = Role::all();

        return response()->JSON($roles);
    }

    public function show($id){
        $role = Role::where('id', $id)->first();

        return response()->JSON($role);
    }

    public function update(Request $request, $id){
        $role = Role::where('id', $id)->first();
        $role->role_name = $request->role_name;
        $role->save();

        return response()->JSON($role);
    }

    public function destroy($id){
        $role = Role::where('id', $id);
        $role->delete();

        return response()->JSON('Eliminado');
    }


    
}
