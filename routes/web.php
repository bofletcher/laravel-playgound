<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return ['foo' => 'bar'];
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
     'jobs' => [
        ['id'=> 1, 'title' => 'Director', 'salary' => "10,000"],
        ['id'=> 2,'title' => 'Programmer', 'salary' => "100,000"],
        ['id'=> 3,'title' => 'Artist', 'salary' => "150,000"]
     ]
    ]);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        ['id'=> 1, 'title' => 'Director', 'salary' => "10,000"],
        ['id'=> 2,'title' => 'Programmer', 'salary' => "100,000"],
        ['id'=> 3,'title' => 'Artist', 'salary' => "150,000"]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    //dd($job);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
