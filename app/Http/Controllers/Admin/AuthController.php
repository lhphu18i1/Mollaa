<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Http\Requests\LoginAdminRequest;
use App\Http\Requests\RegisterAdminRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.admin.login');
    }
    public function showRegister()
    {
        return view('auth.admin.register');
    }
    public function postRegister(RegisterAdminRequest $request)
    {
        $user = Admin::where('email', $request->email)->first();
        if (!$user) {
            $newUser = new Admin();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = bcrypt($request->password);
            $newUser->role = $request->role;
            $newUser->save();
            return redirect()->route('get.admin.login')->with('message', __('messages.account_successfull_created'));
        } else {
            return redirect()->route('get.admin.register')->with('message', __('messages.this_account_already_exists'));
        }
    }
    public function postLogin(LoginAdminRequest $request)
    {
        $guarded = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($guarded)) {
            return redirect()->route('get.dashboard');
        } else {
            return redirect()->back()->withInput();
        }
    }
    public function logout()
    {
        session()->Auth::logout();
        return redirect()->route('get.admin.login');
    }
}
