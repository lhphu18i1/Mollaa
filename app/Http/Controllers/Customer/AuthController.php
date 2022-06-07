<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Http\Requests\RegisterCustomerRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginCustomerRequest;
class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.customer.login');
    }
    public function showRegister()
    {
        return view('auth.customer.register');
    }
    public function postRegister(RegisterCustomerRequest $request){
        $user = Customer::where('email',$request->email)->first();
        if(!$user){
            $newUser = new Customer();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = bcrypt($request->password);
            $newUser->save();
            return redirect()->route('get.customer.login')->with('message',__('messages.account_successfull_created'));
        }else{
            return redirect()->route('get.customer.register')->with('message',__('messages.this_account_already_exists'));
        }

    }
    public function postLogin(LoginCustomerRequest $request){
        $guard = $request->only(['email','password']);
        if(Auth::guard('customer')->attempt($guard)){
            return redirect()->route('get.view.home');
        }else{
            return redirect()->back()->withInput();
        }
    }
}
