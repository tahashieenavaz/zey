<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

Route::view("/", "welcome");

Route::put("/publish", function (Request $request) {
    return;
});

Route::get("/@{username}", function (string $username) {
    return $username;
});
