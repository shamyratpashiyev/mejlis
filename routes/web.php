<?php

use App\Models\FriendshipGroup;
use App\Models\NewsCooperation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\LawsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\DeputyController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommitteesController;
use App\Http\Controllers\ConvocationController;
use App\Http\Controllers\MejlisDecreesController;
use App\Http\Controllers\FriendshipGroupController;
use App\Http\Controllers\NewsCooperationController;
use App\Http\Controllers\ElectionDistrictController;
use App\Http\Controllers\MejlisActivitiesController;
use App\Http\Controllers\NewsInternationalController;
use App\Http\Controllers\TkmPagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware'=>'localization'],function (){
    Route::get('/', [SiteController::class, 'index'])->name('main_page');
    Route::get('/mejlis-history', [SiteController::class, 'mejlis_history'])->name('mejlis_history_page');
    Route::get('/convocation', [SiteController::class, 'convocation'])->name('convocation_page');


    
    Route::get('/mejlis-committees/{id?}', [SiteController::class, 'mejlis_committees'])->name('mejlis_committees_page');
    Route::get('/mejlis-deputies', [SiteController::class, 'mejlis_deputies'])->name('mejlis_deputies_page');
    Route::get('/single-deputy/{id}', [SiteController::class, 'single_deputy'])->name('single_deputy_page');
    // Route::get('/bills-discussion', [SiteController::class, 'bills_discussion'])->name('bills_discussion_page');
    Route::get('/codes/{page_num?}', [SiteController::class, 'codes'])->name('codes_page');
    Route::get('/single-code/{id}', [SiteController::class, 'single_code'])->name('single_code_page');
    Route::get('/laws/{page_num?}', [SiteController::class, 'laws'])->name('laws_page');
    Route::get('/single-law/{id}', [SiteController::class, 'single_law'])->name('single_law_page');
    Route::get('/mejlis-decrees/{page_num?}', [SiteController::class, 'mejlis_decrees'])->name('mejlis_decrees_page');
    Route::get('/single-decree/{id}', [SiteController::class, 'single_decree'])->name('single_decree_page');
    Route::get('/constitutional-law', [SiteController::class, 'constitutional_law'])->name('constitutional_law_page');
    Route::get('/contacts', [SiteController::class, 'contacts'])->name('contacts_page');
    Route::get('/international-cooperation/{page_num?}', [SiteController::class, 'international_cooperation'])->name('international_cooperation_page');
    Route::get('/news-international/{page_num?}', [SiteController::class, 'news_international'])->name('news_international_page');
    Route::get('/single-news-international/{id}', [SiteController::class, 'single_news_international'])->name('single_news_international_page');
    Route::get('/single-news-cooperation/{id}', [SiteController::class, 'single_news_cooperation'])->name('single_news_cooperation_page');
    Route::get('/friendship-group/{id?}', [SiteController::class, 'friendship_group'])->name('friendship_group_page');
    Route::get('/news/{page_num?}', [SiteController::class, 'news'])->name('news_page');
    Route::get('/single-news/{id}', [SiteController::class, 'single_news'])->name('single_news_page');
    Route::get('/articles/{page_num?}', [SiteController::class, 'articles'])->name('articles_page');
    Route::get('/single-article/{id}', [SiteController::class, 'single_article'])->name('single_article_page');
    Route::get('/mejlis-activities/{page_num?}', [SiteController::class, 'mejlis_activities'])->name('mejlis_activities_page');
    Route::get('/single-activity/{id}', [SiteController::class, 'single_activity'])->name('single_activity_page');
    Route::get('/gallery', [SiteController::class, 'gallery'])->name('gallery_page');

    Route::group(['prefix' => 'turkmenistan'],function (){
        Route::get('/general-information', [SiteController::class, 'tkm_pages'])->name('tkm_general_information_page');
    });
});


Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login_post'])->name('login_post');

Route::group(['prefix' => 'adminpanel', 'middleware'=>['auth']],function (){
    Route::get('/', function(){
        return redirect()->route('news.index');
    });
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('news', NewsController::class);
    Route::resource('news_inter', NewsInternationalController::class);
    Route::resource('news_coop', NewsCooperationController::class);
    Route::resource('articles', ArticlesController::class);
    Route::resource('mejlis_activities', MejlisActivitiesController::class);
    Route::resource('deputies', DeputyController::class);
    Route::resource('committees', CommitteesController::class);
    Route::resource('convocations', ConvocationController::class);
    Route::resource('codes', CodesController::class);
    Route::resource('laws', LawsController::class);
    Route::resource('mejlis_decrees', MejlisDecreesController::class);
    Route::resource('friendship_groups', FriendshipGroupController::class);
    Route::resource('election_districts', ElectionDistrictController::class);

    Route::get('/tkm_general_information', [TkmPagesController::class, 'index'])->name('general_information.index');
    Route::get('/tkm_general_information/{id}', [TkmPagesController::class, 'edit'])->name('general_information.edit');
    Route::put('/tkm_general_information/{id}', [TkmPagesController::class, 'update'])->name('general_information.update');

    Route::get('/tkm_foreign_policy', [TkmPagesController::class, 'index'])->name('foreign_policy.index');
    Route::get('/tkm_foreign_policy/{id}', [TkmPagesController::class, 'edit'])->name('foreign_policy.edit');
    Route::put('/tkm_foreign_policy/{id}', [TkmPagesController::class, 'update'])->name('foreign_policy.update');

    Route::get('/tkm_economy', [TkmPagesController::class, 'index'])->name('economy.index');
    Route::get('/tkm_economy/{id}', [TkmPagesController::class, 'edit'])->name('economy.edit');
    Route::put('/tkm_economy/{id}', [TkmPagesController::class, 'update'])->name('economy.update');

    Route::get('/tkm_social_sphere', [TkmPagesController::class, 'index'])->name('social_sphere.index');
    Route::get('/tkm_social_sphere/{id}', [TkmPagesController::class, 'edit'])->name('social_sphere.edit');
    Route::put('/tkm_social_sphere/{id}', [TkmPagesController::class, 'update'])->name('social_sphere.update');

    Route::get('/tkm_healthcare', [TkmPagesController::class, 'index'])->name('healthcare.index');
    Route::get('/tkm_healthcare/{id}', [TkmPagesController::class, 'edit'])->name('healthcare.edit');
    Route::put('/tkm_healthcare/{id}', [TkmPagesController::class, 'update'])->name('healthcare.update');

    Route::get('/tkm_education', [TkmPagesController::class, 'index'])->name('education.index');
    Route::get('/tkm_education/{id}', [TkmPagesController::class, 'edit'])->name('education.edit');
    Route::put('/tkm_education/{id}', [TkmPagesController::class, 'update'])->name('education.update');

    Route::get('/tkm_science', [TkmPagesController::class, 'index'])->name('science.index');
    Route::get('/tkm_science/{id}', [TkmPagesController::class, 'edit'])->name('science.edit');
    Route::put('/tkm_science/{id}', [TkmPagesController::class, 'update'])->name('science.update');

    Route::get('/tkm_sport', [TkmPagesController::class, 'index'])->name('sport.index');
    Route::get('/tkm_sport/{id}', [TkmPagesController::class, 'edit'])->name('sport.edit');
    Route::put('/tkm_sport/{id}', [TkmPagesController::class, 'update'])->name('sport.update');

    Route::get('/tkm_culture', [TkmPagesController::class, 'index'])->name('culture.index');
    Route::get('/tkm_culture/{id}', [TkmPagesController::class, 'edit'])->name('culture.edit');
    Route::put('/tkm_culture/{id}', [TkmPagesController::class, 'update'])->name('culture.update');

    Route::get('/tkm_tourism', [TkmPagesController::class, 'index'])->name('tourism.index');
    Route::get('/tkm_tourism/{id}', [TkmPagesController::class, 'edit'])->name('tourism.edit');
    Route::put('/tkm_tourism/{id}', [TkmPagesController::class, 'update'])->name('tourism.update');

    Route::get('/tkm_avaza', [TkmPagesController::class, 'index'])->name('avaza.index');
    Route::get('/tkm_avaza/{id}', [TkmPagesController::class, 'edit'])->name('avaza.edit');
    Route::put('/tkm_avaza/{id}', [TkmPagesController::class, 'update'])->name('avaza.update');
    
    Route::get('/settings',[AdminController::class, 'settings'])->name('settings');
    Route::post('/langs-update',[AdminController::class, 'langs_update'])->name('langs_update');
});

