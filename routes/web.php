<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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
