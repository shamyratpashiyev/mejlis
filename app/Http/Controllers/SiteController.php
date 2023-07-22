<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\MejlisActivity;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{
    public function __construct(){
        $this->active_langs = Lang::where('is_active',true)->get();
        $this->current_lang = Lang::where('name', request()->query('lang'))->first();
    }

    public function index(){
        $news = News::orderBy('created_at','desc')->limit(11)->get(['id',"title_{$this->current_lang->name}",
                                                                "description_{$this->current_lang->name}", 'event_date', 'image'])->toArray();
        $this->news_big = $news[1];
        $this->news_small = array_slice($news, 1, 6);
        $this->news_medium = array_slice($news, 7);

        $this->mejlis_activities = MejlisActivity::orderBy('created_at','desc')->limit(4)->get(['id',"title_{$this->current_lang->name}",
                                    "description_{$this->current_lang->name}", 'event_date']);
        return view('index', $this->data);
    }

    public function mejlis_history(){
        
        return view('mejlis_history_page');
    }

    public function convocation(){

        return view('convocation_page');
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

    // public function bills_discussion(){

    //     return view('bills_discussion_page');
    // }

    public function codes(){

        return view('codes_page');
    }

    public function laws(){

        return view('laws_page');
    }

    public function mejlis_decrees(){

        return view('mejlis_decrees_page');
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

        return view('news_page', $this->data);
    }

    public function single_news($id){
        $this->selected_news = News::findOrFail($id);
        $this->relative_news = News::whereNotIn('id', [$this->selected_news->id])->orderBy('created_at','desc')->limit(4)->get(['id',"title_{$this->current_lang->name}",
                                "description_{$this->current_lang->name}", 'event_date', 'image']);
        return view('single_news_page',$this->data);
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

    public function gallery(){

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

    public function tkm_state_holidays(){

        return view('turkmenistan.state_holidays_page');
    }
}
