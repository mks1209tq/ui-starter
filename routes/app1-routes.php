<?php

use Illuminate\Support\Facades\Route;

Route::get('/apps/app1', function () {
    return view('apps.app1.index');
})->name('apps1');

Route::get('/people', function () {
    return view('people.index');
})->name('people');

Route::get('/tasks', function () {
    return view('tasks.index');
})->name('tasks');

Route::get('/documents', function () {
    return view('documents.index');
})->name('documents');

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports');