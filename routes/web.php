<?php

use Illuminate\Support\Facades\Route;



Route::get('/charts/chart_line', function () {
    return view('charts/chart_line');
});

Route::get('/charts/chart_pie', function () {
    return view('charts/chart_pai');
});