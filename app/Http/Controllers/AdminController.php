<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function login() {
        return view('admin.login');
    }

    public function login_post(Request $request) {
        $user = Auth::attempt($request->only(['email', 'password']));
        if($user){
            return redirect(route('admin_main'));
        } else {
            session()->flash('invalid_creds', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function logout() {

        Auth::logout();
        return redirect(route('login'));
    }
}
