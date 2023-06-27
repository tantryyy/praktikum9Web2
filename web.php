<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/pasien', function () {
    return view('pasien');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2> hello $nama dari $alamat </h2>";
});


Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id]);
});

 use App\Http\Controllers\UserController;

 Route::get('/user',
    [UserController::class, 'index']);
    
    
Route::get('/user/daftar', 
    [UserController::class, 'daftar']);

Route::post('/user/store', 
    [UserController::class, 'store'])->name('user/store');    



use App\Http\Controllers\TokoController;
Route:: prefix('toko')->group(function(){
    Route::get('/', 
    [TokoController::class, 'index']);
    
Route::get('/detail', 
    [TokoController::class, 'detail']);   



Route::group(['minddlewere' => ['auth']], function(){
    
    Route::get('/admin', 
    [TokoController::class, 'admin']);  

});


Route::get('create',
    [TokoController::class, 'create'])->name('produk_create');  
    
Route::post('/',
    [TokoController::class, 'create'])->name('produk_store');

Route::get('/{product})/edit',
    [TokoController::class, 'edit'])-> name('produk.edit');


});
use Illuminate\support\Facades\Routes;

use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
