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

// Route::get('test', function () {
//     return view('test');
// });

Route::get('/test',[nkpProductController::class,'']);

#views
Route::get('/nkp-view1',function(){
    return view('nkp-view1',['name'=> "K23CNT3 - Project 1 - Phong Adam"]);
});

Route::get('/nkp-view2',function(){
    return view('nkp-view2',[
        'name'=> "K23CNT3 - Project 1 - Phong Adam",
        'array'=> [1,3,2,6,9]
    ]);
});
Route::get('/nkp-view3',function(){
    return view('nkp-view3',[
        'name' =>["Nguyen","Phong","Adam"],
        'arr'  =>[12,22,21,33,55,35],
        'users'=>[]
    ]);
});