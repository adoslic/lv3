<?php
use App\Project;
use App\User;
use Illuminate\Http\Request;
//use App\Http\Controllers\Auth;
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

//početna ruta
Route::get('/', function () {
    return view('welcome');
});

//ruta za autentifikaciju
Route::auth();

//ruta za sve funkcije u ProjectController-u
Route::resource('projects','ProjectController');