<?php

use App\Http\Controllers\ProfileController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

 Route::name('homepage.')->group(function () {
    Route::get('/', function () {
        return view('frontend.homepage.index', [
            'title' => 'AmericaKingStones |Remodeling of Kitchens and Bathrooms with natural stone countertops of Granite, Marble and Quartz
            ',
            'description' => 'Remodeling countertops of Granite, Marble and Quartz',
            'keywords' => 'americakingstones'
        ]);
    })->name('index');
}); 


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/about', 'frontend.homepage.about')->name('about');
Route::view('/services', 'frontend.homepage.services')->name('services');
Route::view('/contact', 'frontend.homepage.contact')->name('contact');
//Route::view('/login', 'frontend.homepage.login')->name('login');

/* Route::view('/register', 'auth.registe')->name('register');
Route::view('/logi', function () {return view('auth.login');})->name('login'); */


Route::middleware('admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::get('/no-access',[AdminController::class,'noAccess'])->name('no-access'); 
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
