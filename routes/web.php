<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("/todos")->group(function () {
    Route::get("/", [TodoController::class, "getAllTodo"]);
    Route::post("/", [TodoController::class,"addTodo"]);
    Route::post("/formdelete", [TodoController::class, "deleteTodo"])->name("formdelete.submit");
    Route::get("/edit/{id}", [TodoController::class, "getEditTodo"]);
    Route::post("/edit/{id}", [TodoController::class, "editTodo"]);
});

