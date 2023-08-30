<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function login_post(Request $request) {
        $user = Auth::attempt($request->only(['email', 'password']));
        if($user){
            return redirect(route('news.index'));
        } else {
            session()->flash('invalid_creds', 'Invalid credentials');
            return redirect()->back();
        }
    }

    public function logout() {

        Auth::logout();
        return redirect(route('login'));
    }

    public function settings(){
        $tm = Lang::where('code','tm')->first();
        $ru = Lang::where('code','ru')->first();
        $en = Lang::where('code','en')->first();
        return view('admin.settings',['tm' => $tm,'ru' => $ru,'en' => $en]);
    }

    public function langs_update(Request $request){
        $selected_lang = Lang::where('code', $request->lang_code)->first();
        if($selected_lang->is_active){
            $selected_lang->is_active = false;
        } else {
            $selected_lang->is_active = true;
        }
        $selected_lang->save();
        return ['status' => 'worked'];
    }
}
