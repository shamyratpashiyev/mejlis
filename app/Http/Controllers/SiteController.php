<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        return view('index');
    }

    public function mejlis_history(){
        
        return view('mejlis_history_page');
    }

    public function deputies_list(){

        return view('deputies_list_page');
    }

    public function mejlis_committees(){

        return view('mejlis_committees_page');
    }

    public function mejlis_deputies(){

        return view('mejlis_deputies_page');
    }

    public function single_deputy(){

        return view('single_deputy_page');
    }

    public function bills_discussion(){

        return view('bills_discussion_page');
    }

    public function codes(){

        return view('codes_page');
    }

    public function constitutional_law(){

        return view('constitutional_law_page');
    }
}
