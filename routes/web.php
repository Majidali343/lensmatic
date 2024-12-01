<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashBagController;
use App\Http\Controllers\SlidersController;


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


Route::middleware('guest')->group(function () {
    
    Route::get('/',[SlidersController::class ,'webindex'])->name('index');

    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/register', function () {
        return view('register');
    })->name('register');
});


Route::post('/storeuser', [UserController::class, 'store'])->name('store.user');
Route::post('/loginuser', [UserController::class, 'login'])->name('login.user');
Route::post('/forgotpasssword', [UserController::class, 'forgotpassword'])->name('forgotpassword.user');
Route::get('/NewPassword/{code}', [UserController::class, 'showNewPasswordForm']);
Route::post('/update-password', [UserController::class, 'updatePassword']);




Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout.user');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/pictureupload', [UserController::class, 'pictureupload'])->name('pctureupload');

    Route::post('/givecashbag', [CashBagController::class, 'store'])->name('admin.addcashbag');
    Route::get('/givencashbag', [CashBagController::class, 'getcasgbags'])->name('admin.given');
    Route::get('/myCashbags', [CashBagController::class, 'getcasgbagsbyuser'])->name('user.got');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admindashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/adminuserlist', [AdminController::class, 'userslist'])->name('admin.userlist');
        Route::get('/adminnewuser', [AdminController::class, 'usersnew'])->name('admin.usernew');
        Route::post('/user/{id}/status', [AdminController::class, 'updateUserStatus'])->name('user.updateStatus');
        Route::post('/user/{id}/delete', [AdminController::class, 'deleteuser'])->name('user.deleteuser');

        Route::get('/assigncashbags', [CashBagController::class, 'index'])->name('admin.cashbags');

        Route::get('/slider', [SlidersController::class, 'index'])->name('admin.slider');
        Route::get('/newslider', [SlidersController::class, 'newslider'])->name('admin.newslider');
        Route::post('/addslider', [SlidersController::class, 'addslider'])->name('admin.addslider');
        Route::delete('/delete/{id}', [SlidersController::class, 'destroy'])->name('delete');

    });


    Route::middleware(['role:user'])->group(function () {
        Route::get('/userdasboard', [UserController::class, 'index'])->name('user.dashboard');
    });
});
