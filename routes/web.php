<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/login.html', function () {
    return view('login');
});

Route::get('/patient-dashboard', function () {
    return view('patient-dashboard');
});
Route::get('/patient-dashboard.html', function () {
    return view('patient-dashboard');
});

Route::get('/vitals', function () {
    return view('vitals');
});
Route::get('/vitals.html', function () {
    return view('vitals');
});

Route::get('/lab-results', function () {
    return view('lab-results');
});
Route::get('/lab-results.html', function () {
    return view('lab-results');
});

Route::get('/doctor-orders', function () {
    return view('doctor-orders');
});
Route::get('/doctor-orders.html', function () {
    return view('doctor-orders');
});

Route::get('/intake-output', function () {
    return view('intake_output');
});
Route::get('/intake_output.html', function () {
    return view('intake_output');
});
Route::get('/intake-output.html', function () {
    return view('intake_output');
});

Route::get('/sync', function () {
    return view('sync');
});
Route::get('/sync.html', function () {
    return view('sync');
});

Route::get('/settings', function () {
    return view('settings');
});
Route::get('/settings.html', function () {
    return view('settings');
});


