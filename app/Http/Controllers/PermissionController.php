<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){

        $permissions = Permission::get();
        return view('role-permission.permission.index', ['permissions' => $permissions]);

    }
    public function create(){
        return view('role-permission.permission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]);

        Permission::create([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status','Permiso creado exitosamente');
    }

    public function edit(Permission $permission){
        return view('role-permission.permission.edit', [
            'permission' => $permission
        ]);
        
    }
    public function update(Request $request, Permission $permission){
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:permissions,name,'.$permission->id
            ]
        ]);

        $permission->update([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status','Permiso actualizado exitosamente');
    }

    public function destroy($permissionId){
        $permission = Permission::find($permissionId);
        $permission->delete();
        return redirect('permissions')->with('status','Permiso eliminado exitosamente');
    }
}