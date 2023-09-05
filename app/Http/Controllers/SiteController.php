<?php

namespace App\Http\Controllers;

use App\Models\Law;
use App\Models\Code;
use App\Models\Lang;
use App\Models\News;
use App\Models\Deputy;
use App\Models\Article;
use App\Models\TkmStateHolidays;
use App\Models\Velayat;
use App\Models\Committee;
use App\Models\Convocation;
use App\Models\MejlisDecree;
use Illuminate\Http\Request;
use App\Models\MejlisActivity;
use App\Models\FriendshipGroup;
use App\Models\NewsCooperation;
use App\Models\ElectionDistrict;
use App\Models\NewsInternational;
use App\Models\TkmArea;
use App\Models\TkmConstitution;
use App\Models\TkmHistory;
use App\Models\TkmPopulation;
use App\Models\TkmStateSymbols;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{
    public function __construct(){
        $this->active_langs = Lang::where('is_active',true)->get();
        $this->current_lang = Lang::where('code', request()->query('lang'))->first();
        $this->convocation_number = Convocation::first()->number;
    }

    public function index(){
        $news_all = News::orderBy('event_date','desc')->limit(11)->select(['id',"title_{$this->current_lang->code}",
                                                                "description_{$this->current_lang->code}", 'event_date', 'image'])->get();
        // dd($news_all);
        $this->news_big = $news_all->slice(0,1)->first();
        $this->news_small = $news_all->slice(1,6);
        $this->news_medium = $news_all->slice(7);
        $this->mejlis_activities = MejlisActivity::orderBy('event_date','desc')->limit(4)->get(['id',"title_{$this->current_lang->code}",
                                    "description_{$this->current_lang->code}", 'event_date']);

        $this->ashgabat_deputies = Deputy::where('velayat_id', 1)->get(['id',"fullname_{$this->current_lang->code}",'election_district_id']);
        $this->ahal_deputies = Deputy::where('velayat_id', 2)->get(['id',"fullname_{$this->current_lang->code}",'election_district_id']);
        $this->mary_deputies = Deputy::where('velayat_id', 3)->get(['id',"fullname_{$this->current_lang->code}",'election_district_id']);
        $this->lebap_deputies = Deputy::where('velayat_id', 4)->get(['id',"fullname_{$this->current_lang->code}",'election_district_id']);
        $this->dashoguz_deputies = Deputy::where('velayat_id', 5)->get(['id',"fullname_{$this->current_lang->code}",'election_district_id']);
        $this->balkan_deputies = Deputy::where('velayat_id', 6)->get(['id',"fullname_{$this->current_lang->code}",'election_district_id']);

        $this->laws_4 = Law::orderBy('published_date', 'DESC')->limit(4)->get(['id',"title_{$this->current_lang->code}", 'published_date']);
        return view('index', $this->data);
    }

    public function mejlis_history(){
        
        return view('mejlis_history_page', $this->data);
    }

    public function convocation(){
        $this->deputies_all = Deputy::orderBy('created_at','desc')->get(['id','fullname_' . request()->query('lang'), 'election_district_id']);
        $this->districts_all = ElectionDistrict::orderBy('created_at','desc')->get(['id','name_' . request()->query('lang')]);
        return view('convocation_page', $this->data);
    }

    public function mejlis_committees(string $id = '0'){
        $locale = request()->query('lang');
        $this->committees_all = Committee::orderBy('created_at','desc')->get(['id','name_' . $locale, 'committee_head_id']);
        
        if($id){
            $this->selected_committee = Committee::select(['id','name_' . $locale, 'committee_head_id'])->findOrFail($id);
        } else {
            $this->selected_committee = Committee::orderBy('created_at','DESC')->select(['id','name_' . $locale, 'committee_head_id'])->firstOrFail();
        }
        return view('mejlis_committees_page', $this->data);
    }

    public function mejlis_deputies(){
        $this->deputies_all = Deputy::orderBy('created_at','desc')->get(['id','fullname_' . request()->query('lang'),'biography_' . request()->query('lang'),
                                        'election_district_id', 'velayat_id', 'email']);
        $this->deputies_json = Deputy::get(['id','fullname_' . request()->query('lang'),'election_district_id', 'velayat_id']);
        $this->velayats_all = Velayat::get();
        $this->election_districts_all = ElectionDistrict::orderBy('created_at','desc')->get(['id', 'name_' . request()->query('lang')]);
        return view('mejlis_deputies_page', $this->data);
    }

    public function single_deputy($id){
        $this->selected_deputy = Deputy::select(['id', "fullname_" . request()->query('lang'),'biography_' . request()->query('lang'),
                 'birth_year_' . request()->query('lang'), 'position_' . request()->query('lang'), 'email', 'velayat_id', 'election_district_id'])
                 ->findOrFail($id);
        return view('single_deputy_page', $this->data);
    }

    // public function bills_discussion(){

    //     return view('bills_discussion_page');
    // }

    public function codes($page_num=1){
        $this->codes_all = Code::orderBy('published_date','desc')->get(['id', 'title_' . request()->query('lang'), 'published_date']);
        $items_per_page = 9;
        $pages_total = ceil($this->codes_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->codes_current_page = $this->codes_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('codes_page', $this->data);
    }

    public function single_code($id) {
        $this->selected_code = Code::select(['id','title_'.request()->query('lang'), 'description_'.request()->query('lang')])
                                ->findOrFail($id);
        return view('single_code_page', $this->data);
    }

    public function laws($page_num=1){
        $this->laws_all = Law::orderBy('published_date','desc')->get(['id', 'title_' . request()->query('lang'), 'published_date']);
        $items_per_page = 9;
        $pages_total = ceil($this->laws_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->laws_current_page = $this->laws_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('laws_page', $this->data);
    }

    public function single_law($id){
        $this->selected_law = Law::select(['id','title_'.request()->query('lang'), 'description_'.request()->query('lang')])
                                ->findOrFail($id);
        return view('single_law_page', $this->data);
    }

    public function mejlis_decrees($page_num=1){
        $this->decrees_all = MejlisDecree::orderBy('published_date','desc')->get(['id', 'title_' . request()->query('lang'), 'published_date']);
        $items_per_page = 9;
        $pages_total = ceil($this->decrees_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->decrees_current_page = $this->decrees_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('mejlis_decrees_page', $this->data);
    }

    public function single_decree($id){
        $this->selected_decree = MejlisDecree::select(['id','title_'.request()->query('lang'), 'description_'.request()->query('lang')])
                                ->findOrFail($id);
        return view('single_decree_page', $this->data);
    }

    public function constitutional_law(){

        return view('constitutional_law_page', $this->data);
    }

    public function contacts(){

        return view('contacts_page', $this->data);
    }

    public function international_cooperation($page_num=1){
        $this->news_all = NewsCooperation::orderBy('event_date','desc')->get(['id','title_'.request()->query('lang'), 'description_'.request()->query('lang'),'event_date','image_1']);
        $items_per_page = 9;
        $pages_total = ceil($this->news_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->news_current_page = $this->news_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('international_cooperation_page', $this->data);
    }

    public function news_international($page_num=1){
        $this->news_all = NewsInternational::orderBy('event_date','desc')->get(['id','title_'.request()->query('lang'), 'description_'.request()->query('lang'),'event_date','image_1']);
        $items_per_page = 9;
        $pages_total = ceil($this->news_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->news_current_page = $this->news_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('news_international_page', $this->data);
    }

    public function single_news_international($id){
        $this->selected_news = NewsInternational::select(['id','title_'.request()->query('lang'), 'description_'.request()->query('lang'),'image_1',
                                                        'image_2', 'image_3', 'image_4', 'image_5', 'image_6', 'event_date'])
        ->findOrFail($id);
        return view('single_news_international_page', $this->data);
    }

    public function single_news_cooperation($id){
        $this->selected_news = NewsCooperation::select(['id','title_'.request()->query('lang'), 'description_'.request()->query('lang'),'image_1',
                                                        'image_2', 'image_3', 'image_4', 'image_5', 'image_6', 'event_date'])
        ->findOrFail($id);
        return view('single_news_cooperation_page', $this->data);
    }

    public function friendship_group(string $id = '0'){
        $locale = request()->query('lang');
        $this->groups_all = FriendshipGroup::orderBy('country_2_' . $locale,'ASC')->get(['id','title_' . $locale,'description_' . $locale,
                                    'country_1_' . $locale,'country_2_' . $locale, 'published_date']);
        if($id){
            $this->selected_group = FriendshipGroup::select(['id','title_' . $locale,'description_' . $locale,
                'published_date', 'flag_1', 'flag_2','country_1_' . $locale,'country_2_' . $locale])
                ->findOrFail($id);
        } else {
            $this->selected_group = FriendshipGroup::orderBy('published_date','desc')->select(['id','title_' . $locale,'description_' . $locale,
                                 'published_date', 'flag_1', 'flag_2','country_1_' . $locale,'country_2_' . $locale])
                                 ->firstOrFail();
        }
        return view('friendship_group_page', $this->data);
    }

    public function news($page_num=1){
        $news_all = News::orderBy('event_date','DESC')->get(['id',"title_{$this->current_lang->code}",
                                "description_{$this->current_lang->code}", 'event_date', 'image']);

        $items_per_page = 19;
        $pages_total = ceil($news_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $news_current_page = $news_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        $this->news_big = $news_current_page->slice(0, 1)->first();
        $this->news_small = $news_current_page->slice(1, 6);
        $this->news_medium = $news_current_page->slice(7);
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('news_page', $this->data);
    }

    public function single_news($id){
        $this->selected_news = News::findOrFail($id);
        $this->relative_news = News::whereNotIn('id', [$this->selected_news->id])->orderBy('event_date','desc')->limit(4)->get(['id',"title_{$this->current_lang->code}",
                                "description_{$this->current_lang->code}", 'event_date', 'image']);
        return view('single_news_page',$this->data);
    }

    public function articles($page_num=1){

        $articles_all = Article::orderBy('published_date', 'DESC')->get(['id', 'title_' . request()->query('lang'), 'description_' . request()->query('lang'), 'published_date']);
        $items_per_page = 9;
        $pages_total = ceil($articles_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->articles_current_page = $articles_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('articles_page', $this->data);
    }

    public function single_article($id){
        $this->selected_article = Article::select(['id','title_' . request()->query('lang'), 'description_' . request()->query('lang'),'published_date'])
                                ->findOrFail($id);
        
        return view('single_article_page', $this->data);
    }
    
    public function mejlis_activities($page_num=1){
        $activitiess_all = MejlisActivity::orderBy('event_date', 'DESC')->get(['id', 'title_' . request()->query('lang'), 'description_' . request()->query('lang'), 'event_date']);
        $items_per_page = 9;
        $pages_total = ceil($activitiess_all->count() / $items_per_page);
        $this->current_page = $page_num;
        $this->activities_current_page = $activitiess_all->slice(($items_per_page * $page_num) - $items_per_page , $items_per_page);
        $this->pagination_array = $this->paginate($page_num, $pages_total);
        $this->prev_page = $page_num > 1 ? $page_num - 1 : 1;
        $this->next_page = $page_num < $pages_total ? $page_num + 1 : $page_num;
        if($page_num > $pages_total){
            return abort(404);
        }
        return view('mejlis_activities_page', $this->data);
    }

    public function single_activity(string $id){
        $this->selected_activity = MejlisActivity::select(['id', "title_" . request()->query('lang'),'description_' . request()->query('lang'),
                                                    'event_date'])->findOrFail($id);;
        return view('single_activity_page', $this->data);
    }

    public function gallery(){

    }

    public function tkm_pages(){

        return view('turkmenistan.general_information', $this->data);
    }

    public function paginate($currentPage, $pagesTotal) {
        /*
          I divided the pagination row into three blocks (1 ... 13 14 15 ... 22)
          It works like this:
            --If the length of the pages is not long enough, then the separators("...") are not added at all.
            --If the separator ("...") is present on one side only, the block that has the separator is generated separately
              and the other block that doesn't have the separator is merged into the middle block.
            --If the separator is present on both sides, the left and right side blocks are generated separately (with the separator)
              and the middle block is also generated separately
        */
        $leftBlockLength = 1; // Length of the left block(before the "..." separator)
        $rightBlockLength = 1; // Length of the right block(after the "..." separator)
        $currentPageOffsets = 2; // The offsets on both sides of the current page
        $paginationRowLength = $leftBlockLength + ($currentPageOffsets * 2 + 1) + $rightBlockLength + 2; // 2 is for two "..." elements and +1 is for the current_page itself
        $separator = '...';
  
        $currentPage = intval($currentPage);
        $pagesTotal = intval($pagesTotal);
        $result = [];
  
        $separatorThresholdLeft = $leftBlockLength + 1 + $currentPageOffsets + 1; // Threshold for adding the "..." before the current page (+1 is for "..." and the next one is for the currentPage element itself)
        $separatorThresholdRight = 1 + $currentPageOffsets + 1 + $rightBlockLength; // Threshold for removing the "..." after the current page (+1 is for the currentPage element itself and the next one is for "...")
  
        $leftThresholdCrossed = $currentPage > $separatorThresholdLeft;
        $rightThresholdCrossed = $pagesTotal - $separatorThresholdRight < $currentPage;
  
        if ($pagesTotal <= $paginationRowLength) { // If there is no need to add "..." at all
          $result = range(1,$pagesTotal); 
        } else {
          /* ----------------------------------- Left block -------------------------------- */
          if (!$leftThresholdCrossed) { // The "..." should not be added
            $result = range(1, $separatorThresholdLeft + $currentPageOffsets); 
          } else {
            for ($i = 1; $i <= $leftBlockLength; $i++) { // Generating the left side block
              array_push($result, $i);
            }
            array_push($result, $separator);
          }
  
          /* -------------------------------------Middle block ------------------------- */
          if ($leftThresholdCrossed && !$rightThresholdCrossed) { // If the middle block is surrounded by "..." on both sides
            for ($i = $currentPage - $currentPageOffsets; $i <= $currentPage + $currentPageOffsets; $i++) { // Generating the middle block
              array_push($result, $i);
            }
          }
  
          /* --------------------------------------The Right block ----------------------- */
          if ($rightThresholdCrossed) { // Threshold has been crossed and "..." should not be added
            for ($i = ($pagesTotal + 1) - ($separatorThresholdRight + $currentPageOffsets); $i <= $pagesTotal; $i++) {
              array_push($result, $i);
            }
          } else { // Threshold has not been crossed and "..." should be added
            array_push($result,$separator);
            for ($i = $pagesTotal - $rightBlockLength + 1; $i <= $pagesTotal; $i++) {
              array_push($result, $i);
            }
          }
        }
        
        return $result;
    }
}
