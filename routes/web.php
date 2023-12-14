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


Route::get('/', [PageCtrl::class, 'index'])->name('index');

Route::get('/Register', [UserCtrl::class, 'Register'])->name('Register');
Route::post('/registers', [UserCtrl::class, 'registerPost'])->name('registers');
Route::get('/LogIn', [UserCtrl::class, 'login'])->name('login');
Route::post('/LogIn', [UserCtrl::class, 'loginPost'])->name('loginp');

//All Events show
Route::get('/Events', [PageCtrl::class, 'InnerC'])->name('Inner');

// Show event creation
Route::get('/Events/Create', [PageCtrl::class, 'CRF']);


// Store event into database
Route::post('/Events', [PageCtrl::class, 'SF'])->name('SF');

//show event edit form
Route::get('/Events/{Events}/Edit', [PageCtrl::class, 'edit']); 

// store edited event into database
Route::put('/Events/{Events}', [PageCtrl::class, 'update']);




//Single Event show
//the curly bracket is the ID of the evnt taken from data and dapat nasa dulo
Route::get('/Events/{Events}', [PageCtrl::class, 'Sevnt']);



/*Route::get('/Events/{events}', function(){
    return view('Inner.Events', [
        'Events' => Events::all()



    ]);




});*/



