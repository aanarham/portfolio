<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/skills', function () {
    return view('pages.skills');
})->name('skills');

Route::get('/education', function () {
    return view('pages.education');
})->name('education');

Route::get('/experience', function () {
    return view('pages.experience');
})->name('experience');

Route::get('/work', function () {
    return view('pages.work');
})->name('work');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

