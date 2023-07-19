<?php

use App\Models\NewsCooperation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CodesController;
use App\Http\Controllers\DeputyController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommitteesController;
use App\Http\Controllers\ConvocationController;
use App\Http\Controllers\LawsController;
use App\Http\Controllers\NewsCooperationController;
use App\Http\Controllers\MejlisActivitiesController;
use App\Http\Controllers\NewsInternationalController;

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

Route::get('/', [SiteController::class, 'index'])->name('main_page');
Route::get('/mejlis-history', [SiteController::class, 'mejlis_history'])->name('mejlis_history_page');
Route::get('/deputies-list', [SiteController::class, 'deputies_list'])->name('deputies_list_page');
Route::get('/mejlis-committees', [SiteController::class, 'mejlis_committees'])->name('mejlis_committees_page');
Route::get('/mejlis-deputies', [SiteController::class, 'mejlis_deputies'])->name('mejlis_deputies_page');
Route::get('/single-deputy/{id}', [SiteController::class, 'single_deputy'])->name('single_deputy_page');
Route::get('/bills-discussion', [SiteController::class, 'bills_discussion'])->name('bills_discussion_page');
Route::get('/codes', [SiteController::class, 'codes'])->name('codes_page');
Route::get('/constitutional-law', [SiteController::class, 'constitutional_law'])->name('constitutional_law_page');
Route::get('/contacts', [SiteController::class, 'contacts'])->name('contacts_page');
Route::get('/international-cooperation', [SiteController::class, 'international_cooperation'])->name('international_cooperation_page');
Route::get('/news-international', [SiteController::class, 'news_international'])->name('news_international_page');
Route::get('/single-news-international/{id}', [SiteController::class, 'single_news_international'])->name('single_news_international_page');
Route::get('/single-item-international/{id}', [SiteController::class, 'single_item_international'])->name('single_item_international_page');
Route::get('/friendship-group', [SiteController::class, 'friendship_group'])->name('friendship_group_page');
Route::get('/news', [SiteController::class, 'news'])->name('news_page');
Route::get('/single-news/{id}', [SiteController::class, 'single_news'])->name('single_news_page');
Route::get('/articles', [SiteController::class, 'articles'])->name('articles_page');
Route::get('/single-article/{id}', [SiteController::class, 'single_article'])->name('single_article_page');
Route::get('/mejlis-activities', [SiteController::class, 'mejlis_activities'])->name('mejlis_activities_page');
Route::get('/single-activity/{id}', [SiteController::class, 'single_activity'])->name('single_activity_page');

Route::group(['prefix' => 'turkmenistan'],function (){
    Route::get('/history', [SiteController::class, 'tkm_history'])->name('tkm_history_page');
    Route::get('/area', [SiteController::class, 'tkm_area'])->name('tkm_area_page');
    Route::get('/population', [SiteController::class, 'tkm_population'])->name('tkm_population_page');
    Route::get('/state-symbols', [SiteController::class, 'tkm_state_symbols'])->name('tkm_state_symbols_page');
    Route::get('/state-holidays', [SiteController::class, 'tkm_state_holidays'])->name('tkm_state_holidays_page');
});

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login_post'])->name('login_post');

Route::group(['prefix' => 'adminpanel', 'middleware'=>['auth']],function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin_main');
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
});

