<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tecCardController;
use Illuminate\Support\Facades\DB;

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

// Lbc basics
App\Lbc\LaravelBootstrapComponents::init();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $data['projects'] = DB::table('projects')->get()->all();
    return view('dashboard',compact('data'));
})->name('dashboard');
//route::middleware(['auth:sanctum', 'verified'])->get('/teccard', function (){
//    return view('tecCard.tecCardCreate');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('tecCard/create/{id}',['as'=>'tecCard.create','uses'=>'App\Http\Controllers\tecCardController@create']);
Route::middleware(['auth:sanctum', 'verified'])->post('taskState/change','App\Http\Controllers\tecCardController@change')->name('changeStatus');
Route::middleware(['auth:sanctum', 'verified'])->resource('tecCard','App\Http\Controllers\tecCardController',['except' => 'create']);

Route::middleware(['auth:sanctum', 'verified'])->get('taskState/create/{id}',['as'=>'taskState.create','uses'=>'App\Http\Controllers\taskStateController@create']);
Route::middleware(['auth:sanctum', 'verified'])->resource('taskState','App\Http\Controllers\taskStateController',['except' => 'create']);

Route::middleware(['auth:sanctum', 'verified'])->resource('project' , 'App\Http\Controllers\projectController');


Route::get('/deneme/{name}','tecCardController@deneme');

Route::get('/post', App\Http\Livewire\ShowPosts::class);
