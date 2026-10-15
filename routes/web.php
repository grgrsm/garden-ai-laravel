<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get("/", [BasicController::class, "index"])->name("home");
Route::get("/about", [BasicController::class, "about"])->name("about");
Route::get("/contacts", [BasicController::class, "contacts"])->name("contacts");

Route::post("/contacts", [BasicController::class, "submit"])->name(
    "contacts.post",
);
