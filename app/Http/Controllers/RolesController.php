<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
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
        $data['title'] = 'Roles';
        $data['roles'] = Role::all();
        return view('roles.roles-list', $data);
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
        $validator = Validator::make($request->all(),[
            'name' => 'required | string',
        ],
        [
            'name.required' => 'Role name is required',
        ]);
        if($validator->passes()){
            $role = new Role();
            $role->name = $request->name;
            $role->guard_name = 'web';
            $role->save();
            session()->flash('success', 'Role Added Successfully');
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
        $data['title'] = 'Role Details';
        $data['role'] = Role::find($id);
        return view('roles.role-edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['title'] = 'Edit Role';
        $data['role'] = Role::find($id);
        return view('roles.role-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required | string',
        ],
        [
            'name.required' => 'Role name is required',
        ]);
        if($validator->passes()){
            $role = Role::find($id);
            $role->name = $request->name;
            $role->save();
            session()->flash('success', 'Role Updated Successfully');
            return redirect()->route('roles.index');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors(['name' => 'Role name is required']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
