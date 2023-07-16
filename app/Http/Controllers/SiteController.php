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

    public function contacts(){

        return view('contacts_page');
    }

    public function international_cooperation(){

        return view('international_cooperation_page');
    }

    public function news_international(){

        return view('news_international_page');
    }

    public function single_news_international(){

        return view('single_news_international_page');
    }

    public function single_item_international(){

        return view('single_item_international_page');
    }

    public function friendship_group(){

        return view('friendship_group_page');
    }

    public function news(){

        return view('news_page');
    }

    public function single_news(){

        return view('single_news_page');
    }

    public function articles(){

        return view('articles_page');
    }

    public function single_article(){

        return view('single_article_page');
    }
    
    public function mejlis_activities(){

        return view('mejlis_activities_page');
    }

    public function single_activity(){

        return view('single_activity_page');
    }

    public function tkm_history(){

        return view('turkmenistan.history_page');
    }

    public function tkm_area(){

        return view('turkmenistan.area_page');
    }

    public function tkm_population(){

        return view('turkmenistan.population_page');
    }

    public function tkm_state_symbols(){

        return view('turkmenistan.state_symbols_page');
    }
}
