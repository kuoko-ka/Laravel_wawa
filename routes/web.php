<?php

use App\Models\Events;
use App\Http\Controllers\PageCtrl;
use App\Http\Controllers\UserCtrl;
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


// Things u should know :)
// Sevnt shows the specific event
// Inner is where all events is displayed
//Daanan rawr
// check mga controllers to understand app/Http/Controllers/


//User route
Route::get('/Register', [UserCtrl::class, 'Register'])->name('Register')->middleware('guest');
Route::post('/registers', [UserCtrl::class, 'registerPost'])->name('registers')->middleware('guest');
Route::post('/logout', [UserCtrl::class, 'logout'])->name('LG')->middleware('auth');
Route::get('/LogIn', [UserCtrl::class, 'login'])->name('login')->middleware('guest');
Route::post('/LogIn', [UserCtrl::class, 'loginPost'])->name('loginp')->middleware('guest');

//admin route




    // Store event into database
Route::post('/Events/Post', [PageCtrl::class, 'SF'])->middleware('auth','isAdmin');
// Show event creation
Route::get('/Events/Create', [PageCtrl::class, 'CRF'])->name('kreeyt')->middleware('auth','isAdmin');

// store edited event into database
Route::get('/Events/{events}/Edit', [PageCtrl::class, 'edit'])->middleware('auth', 'isAdmin');
Route::put('/Events/{events}', [PageCtrl::class, 'update'])->middleware('auth', 'isAdmin');
Route::delete('/Events/{events}',[PageCtrl::class,'delete'])->middleware('auth','isAdmin');

//general
Route::get('/', [PageCtrl::class, 'index'])->name('index');
//All Events show
Route::get('/Events', [PageCtrl::class, 'InnerC'])->name('Inner');









//Single Event show
//the curly bracket is the ID of the evnt taken from data and dapat nasa dulo
//show event edit form

Route::get('/Events/{events}', [PageCtrl::class, 'Sevnt']);





/*Route::get('/Events/{events}', function(){
    return view('Inner.Events', [
        'Events' => Events::all()



    ]);




});*/



