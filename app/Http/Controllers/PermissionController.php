<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use App\Models\ModulesModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function __construct(){
        if(!auth()->user()->hasRole('Admin')){
            return abort(403, 'Unauthorized action.');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Permissions';
        $data['permissions'] = Permission::where('status', 'Active')->get();
        $data['modules'] = ModulesModel::all();
        return view('admin.permissions.permissions-list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'module_id' => 'required|integer',
        ]);
        if($validator->passes()){
            $permission = new Permission();
            $permission->name = $request->name;
            $permission->guard_name = 'web';
            $permission->module_id = $request->module_id;
            $permission->save();
            session()->flash('success', 'Permission Added Successfully');
            return response()->json([
                'status' => true,
                'errors' => [],
            ]);
        }
        else
        {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ],403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['title'] = 'Permission Details';
        $role_permissions_arr = [];
        $role_permissions = DB::table('role_has_permissions')->where('role_id', $id)->get();
        foreach($role_permissions as $role_permission){
            $role_permissions_arr[] = $role_permission->permission_id;
        }
        $data['role_permissions'] = $role_permissions_arr;
        // $data['permissions'] = Permission::all();
        $data['modules'] = ModulesModel::all();
        $data['role_id'] = $id;
        return view('permissions.permission-details', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['title'] = 'Edit Permission';
        $data['permission'] = Permission::find($id);
        $data['modules'] = ModulesModel::all();
        return view('permissions.permission-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if($validator->passes()){
            $permission = Permission::find($id);
            $permission->name = $request->name;
            $permission->guard_name = 'web';
            $permission->save();
            session()->flash('success', 'Permission Updated Successfully');
            return redirect()->route('permissions.index');
        }
        else
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::find($id);
        $permission->status = 'Deleted';
        $permission->save();
        session()->flash('success', 'Permission Deleted Successfully');
        return redirect()->route('permissions.index');
    }//

    public function updatePermissions($role_id, Request $request)
    {
        $role = Role::find($role_id);
        $role->syncPermissions($request->permissions);
        session()->flash('success', 'Permissions Updated Successfully');
        return redirect()->back();
    }//
}
