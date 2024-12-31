<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
     'jobs' => [
        ['title' => 'Director', 'salary' => "10,000"],
        ['title' => 'Programmer', 'salary' => "100,000"],
        ['title' => 'Artist', 'salary' => "150,000"]
     ]
    ]);
});

Route::get('/jobs', function () {
    //return ['foo' => 'bar'];
    return view('jobs', [
     'jobs' => [
        ['title' => 'Director', 'salary' => "10,000"],
        ['title' => 'Programmer', 'salary' => "100,000"],
        ['title' => 'Artist', 'salary' => "150,000"]
     ]
    ]);
});

Route::get('/contact', function () {
    //return ['foo' => 'bar'];
    return view('contact');
});
