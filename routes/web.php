<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CodeController;

use App\Http\Controllers\SignedRouteController;

use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    PostController,
    VerificationController,
    VerificacionEliminarController,
};
use App\Http\Controllers\CodeUpdateController;

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
    return view('welcome');
});


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front','codigomidelware'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','codigomidelware'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('soft','VerificacionEliminarController');
        Route::resource('posts','PostController')->except(['edit']);
        Route::get('/posts/{post}/verify-code', 'PostController@verifyCode')->name('posts.verify-code');
        Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit')->middleware('updatemidelware');
        Route::get('/posts/{post}/destruir', 'PostController@destruir')->name('posts.destruir');
        Route::resource('codes','VerificationController');
        Route::get('/verificar',[PostController::class, 'verificar'])->name('verificar');
        Route::post('/verificar',[PostController::class, 'guardarPeticion'])->name('pedirc');
        Route::get('/verificareliminar',[PostController::class, 'verificarelim'])->name('verificareliminar');
        Route::post('/verificareliminar',[PostController::class, 'guardarPeticionEliminar'])->name('pedireliminar');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});




Route::get('/firmada', [SignedRouteController::class, 'SignedRoute'])->name('firmada');
Route::get('/codidgoupdate', [CodeUpdateController::class, 'Codigo'])->name('codidgoupdate');

Route::get('/verificacion', function () {
    return view('verificacion');
})->name('verificacion');



Route::post('/validacion', [CodeController::class, 'generarWeb'])->name('validacion');