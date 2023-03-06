<?php

use Illuminate\Support\Facades\Route;
//use LoginInfo\Http\Controllers;
use LoginInfo\Http\Controllers\LoginInfoController;

//use LoginInfo\Http\Controllers\LoginInfoController;


Route::group(['namespace'=>'LoginInfo\Http\Controllers'],function (){
    Route::post ('loginInfo',[LoginInfoController::class,'index'])->name('loginInfo');
});

