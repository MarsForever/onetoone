<?php
use Illuminate\Support\Facades\Route;
use App\User;
use App\Address;

// use Illuminate\Routing\Route;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert',function(){
    $user = User::findOrFail(1);
    $address = new Address(['name'=>'address name 2']);
    $user->address()->save($address);
});

Route::get('/update',function(){
    
});