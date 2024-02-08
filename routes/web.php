<?php

use Illuminate\Support\Facades\Route;  

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

Route::get('/', function () { return view('welcome'); }); 

Auth::routes(); 

// routes for test api by auth
Route::post('register', [App\Http\Controllers\Api\RegisterController::class, 'register']);
Route::post('login', [App\Http\Controllers\Api\RegisterController::class, 'login']);

// routes for app rab
Route::group(['prefix' => 'app_rab', 'middleware'=>'auth'], function(){
    // pekerjaan
    Route::post('save/pekerjaan', 'PekerjaanController@save_pekerjaan')->name("save_pekerjaan");
    Route::post('update/pekerjaan', 'PekerjaanController@update_pekerjaan')->name("update_pekerjaan");
    Route::post('delete/pekerjaan', 'PekerjaanController@deleteByIdpekerjaan')->name("update_Pekerjaan"); 

    /*  */ 
    Route::post('save/sub/pekerjaan', 'SubpekerjaanController@save_subpekerjaan')->name("save_subpekerjaan"); 
    Route::post('update/sub/pekerjaan', 'SubpekerjaanController@update_subpekerjaan')->name("update_subpekerjaan"); 
    Route::post('delete/sub/pekerjaan', 'SubpekerjaanController@deleteByIdsubpekerjaan')->name("deleteByIdsubpekerjaan"); 

    /* */  
    Route::post('save/item/pekerjaan', 'ItempekerjaanController@save_itempekerjaan')->name("save_itempekerjaan"); 
    Route::post('update/item/pekerjaan', 'ItempekerjaanController@update_itempekerjaan')->name("update_itempekerjaan"); 
    Route::post('delete/item/pekerjaan', 'ItempekerjaanController@deleteByIditempekerjaan')->name("deleteByIditempekerjaan"); 

    /* */   
    Route::post('save/material/pekerjaan', 'MaterialpekerjaanController@save_materialpekerjaan')->name("save_itempekerjaan"); 
    Route::post('update/material/pekerjaan', 'MaterialpekerjaanController@update_materialpekerjaan')->name("update_itempekerjaan"); 
    Route::post('delete/material/pekerjaan', 'MaterialpekerjaanController@deleteByIdmaterialpekerjaan')->name("deleteByIditempekerjaan"); 

    /* */  
    Route::post('save/formula/pekerjaan', 'FormulaController@save_materialpekerjaan')->name("save_itempekerjaan"); 
    Route::post('update/formula/pekerjaan', 'FormulaController@update_materialpekerjaan')->name("update_itempekerjaan"); 
    Route::post('delete/formula/pekerjaan', 'FormulaController@deleteByIdmaterialpekerjaan')->name("deleteByIditempekerjaan"); 

});

Route::group(['prefix' => 'app_rab'], function(){
    /* */ 
    Route::get('/home', [App\Http\Controllers\AppRabs\PagesController::class, 'index'])->name('app_rab'); 
    Route::get('/pekerjaan', [App\Http\Controllers\AppRabs\PekerjaanController::class, 'index'])->name("pekerjaan");
    Route::get('/item_pekerjaan', [App\Http\Controllers\AppRabs\ItemController::class, 'index'])->name("item_pekerjaan"); 
    Route::get('/sub_pekerjaan', [App\Http\Controllers\AppRabs\SubController::class, 'index'])->name("sub_pekerjaan");
    Route::get('/material', [App\Http\Controllers\AppRabs\MaterialController::class, 'index'])->name("material");
    Route::get('/formula', [App\Http\Controllers\AppRabs\FormulaController::class, 'index'])->name("formula");
    
    /* */ 
    Route::get('/data/pekerjaan', [App\Http\Controllers\AppRabs\PekerjaanController::class, 'load_data'])->name("load_data");

});
