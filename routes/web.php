<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowServicePage;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowServicePage::class)->name('servicePage');