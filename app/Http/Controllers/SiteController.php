<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        return view('index');
    }

    public function mejlis_history(){
        
        return view('mejlis_history');
    }

    public function deputies_list(){

        return view('deputies_list');
    }

    public function mejlis_committees(){

        return view('mejlis_committees');
    }

    public function mejlis_deputies(){

        return view('mejlis_deputies');
    }

    public function single_deputy(){

        return view('single_deputy_page');
    }
}
