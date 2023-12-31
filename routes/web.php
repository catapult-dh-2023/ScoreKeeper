<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\IndividualResultController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnsLoginController;

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

Route::resource('game', GameController::class);
//Route::resource('individual_results', IndividualResultController::class);

Route::middleware('auth')->group(function(){
    Route::get('/individual_results/mydata', [IndividualResultController::class, 'mydata'])->name('individual_results.mydata');
    Route::get('/individual_results/analysis', [IndividualResultController::class, 'analysis'])->name('individual_results.analysis');
    Route::resource('individual_results', IndividualResultController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/game/create');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/google', [SnsLoginController::class, 'getGoogleAuth'])->name('login.google');
Route::get('/auth/google/callback', [SnsLoginController::class, 'authGoogleCallback'])->name('login.google.callback');

Route::get('/auth/line', [SnsLoginController::class, 'getLineAuth'])->name('login.line');
Route::get('/auth/line/callback', [SnsLoginController::class, 'authLineCallback'])->name('login.line.callback');

// Auth::routes();
// Route::prefix('login')->name('login.')->group(function() {
//     Route::get('/line/redirect', [SnsLoginController::class, 'redirectToProvider'])->name('line.redirect');
//     Route::get('/line/callback', [SnsLoginController::class, 'handleProviderCallback'])->name('line.callback');
// });

require __DIR__.'/auth.php';
