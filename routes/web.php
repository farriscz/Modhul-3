<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $nim = "707082400131";
    return view('home', compact('nim')); 
});

