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
Route::get('/Register', [UserCtrl::class, 'Register'])->name('Register');
Route::post('/registers', [UserCtrl::class, 'registerPost'])->name('registers');
Route::post('/logout', [UserCtrl::class, 'logout'])->name('LG');
Route::get('/LogIn', [UserCtrl::class, 'login'])->name('login');
Route::post('/LogIn', [UserCtrl::class, 'loginPost'])->name('loginp');

//admin route


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    // Show event creation
    Route::get('/Events/Create', [PageCtrl::class, 'CRF']);
    // Store event into database
    Route::post('/Events', [PageCtrl::class, 'SF'])->name('SF');
    // store edited event into database
    Route::get('/Events/{events}/Edit', [PageCtrl::class, 'edit']);
    Route::put('/Events/{events}', [PageCtrl::class, 'update']);

});
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



