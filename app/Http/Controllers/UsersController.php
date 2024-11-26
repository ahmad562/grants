<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!auth()->user()->can('View User')){
            return view('Unauthorized-403');
        }
        $data['title'] = 'Users';
        $data['users'] = User::getAllUsers();
        // dd($data['users'][0]);
        $data['roles'] = Role::all();
        return view('admin.users.users-list', $data);
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
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | email',
            'username' => 'required | string',
            'password' => 'required | string',
            'role' => 'required',
            'phone_number' => 'required | string',
            'address1' => 'required | string',
            'address2' => 'required | string',
            'city' => 'required | string',
            'state' => 'required | string',
            'zip_code' => 'required | string'
        ]);

        if($validator->passes()){
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->assignRole($request->role);
            $user->phone_number = $request->phone_number;
            $user->address1 = $request->address1;
            $user->address2 = $request->address2;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->zip_code = $request->zip_code;
            if($user->save()){
                session()->flash('success', 'User Created Successfully');
                return response()->json([
                    'status' => true,
                    'errors' => [],
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'errors' => ['An error occurred while creating user'],
                ],403);
            }
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
        if(!auth()->user()->hasRole('Admin') && auth()->user()->id != $id){
            return redirect()->route('users.show', auth()->user()->id);
        }//
        $data['title'] = 'Profile Details';
        $data['user'] = User::find($id);
        return view('admin.users.profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!auth()->user()->hasRole('Admin') && auth()->user()->id != $id){
            return redirect()->route('users.show', auth()->user()->id);
        }//
        $data['title'] = 'Edit User';
        $data['user'] = User::find($id);
        $data['roles'] = Role::all();
        return view('admin.users.user-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'first_name' => 'required | string',
            'last_name' => 'required | string',
            'email' => 'required | email',
            'username' => 'required | string',
            'role' => 'required',
            'phone_number' => 'required | string',
            'address1' => 'required | string',
            'address2' => 'required | string',
            'city' => 'required | string',
            'state' => 'required | string',
            'zip_code' => 'required | string'
        ]);
        if($validator->passes()){
            $user = User::find($id);
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->syncRoles($request->role);
            $user->phone_number = $request->phone_number;
            $user->address1 = $request->address1;
            $user->address2 = $request->address2;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->zip_code = $request->zip_code;
            if($user->save()){
                session()->flash('success', 'User Updated Successfully');
                if(!auth()->user()->hasRole('Admin')){
                    return redirect()->route('users.show', $id);
                }else{
                    return redirect()->route('users.index');
                }
            }else{
                return response()->json([
                    'status' => false,
                    'errors' => ['An error occurred while updating user'],
                ],403);
            }
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
        $user = User::find($id);
        $user->status = 'Inactive';
        if($user->save()){
            session()->flash('success', 'Training Deleted Successfully');
            return response()->json([
                'status' => true,
                'errors' => [],
            ]);
        }else{
            return response()->json([
                'status' => false,
                'errors' => ['An error occurred while deleting training'],
            ],403);
        }
    }
}
