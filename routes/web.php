<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetCookieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login_boxed');
});
Route::get('/dashboard/sales', function () {
    return view('pages.dashboard.sales');
})->name('sales');
Route::get('/dashboard/analytics', function () {
    return view('pages.dashboard.analytics');
})->name('analytics');
Route::get('/components/tabs', function () {
    return view('pages.components.tabs');
})->name('tabs');
Route::get('/components/modal', function () {
    return view('pages.components.modal');
})->name('modal');
Route::get('/components/alert', function () {
    return view('pages.components.toasteralert');
})->name('alert');
Route::get('/components/subscriptions', function () {
    return view('pages.components.subscriptions');
})->name('subscriptions');
Route::get('/datatables/table', function () {
    return view('pages.datatables.datatable');
})->name('datatable');
Route::get('/menu/user-profile', function () {
    return view('pages.user_profile');
})->name('user-profile');
Route::GET('/setCookie', [SetCookieController::class, 'setCookie'])->name('setCookie');
Route::get('/getCookie', [SetCookieController::class, 'getCookie'])->name('getCookie');