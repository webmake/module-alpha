<?php

Route::get('/alpha', function(){
    return response()->json(config('module_alpha.text'));
})->name('alpha');
