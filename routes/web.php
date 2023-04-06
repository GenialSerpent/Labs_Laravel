<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CV;

Route::get('/', function () {
    return 'welcome';
});
Route::get('/Molchanov/cv', [CV::class, 'resume']);
