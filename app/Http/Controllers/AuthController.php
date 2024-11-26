<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cache;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        if(!empty(Auth::check())){
            return redirect()->route('dashboard');
        }
        Cache::flush();
        return view('admin.login');
    }//

    public function authenticate(Request $request){
        // dd($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password], $remember)) {
            //Store user data in session
            Session::put('user', Auth::user());

            // Clear cache after successful login
            Cache::flush();
            
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Invalid username or password');
        }
    }//

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }//

    public function changePasswordView(){
        $data['title'] = 'Change Password';
        return view('admin.change-password', $data);
    }//

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = User::find(auth()->user()->id);
        if(Hash::check($request->old_password, $user->password)){
            $user->password = Hash::make($request->new_password);
            $user->save();
            session()->flash('success', 'Password Changed Successfully');
            return redirect()->back();
        }else{
            return redirect()->route('change.password.view')->withInput()->withErrors(['old_password' => 'Old password is incorrect']);
        }
    }//
}
