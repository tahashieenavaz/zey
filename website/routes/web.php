<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "welcome");

Route::put("/publish", function () {
    $data = request()->validate([
        'slug' => "required|string",
        "file" => "required|ext:md"
    ]);
});

Route::get("/@{username}", function (string $username) {
    return $username;
});
