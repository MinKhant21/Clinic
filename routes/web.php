<?php

use Illuminate\Support\Facades\Route;

Route::view('/','index');

Route::get('/test',function(){
    return view('test'); 
});