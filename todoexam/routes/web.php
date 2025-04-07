<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', [TodoController::class, 'home'])->name('todo.home');
Route::get('/addTask', [TodoController::class, 'addTodo'])->name('todo.addTodo');
Route::get('/lists', [TodoController::class, 'todoLists'])->name('todo.todoLists');
Route::get('/lists/{id}', [TodoController::class, 'todoId'])->name('todo.todoId');
Route::post('/lists', [TodoController::class, 'createTodo'])->name('todo.createTodo');
Route::delete('/lists/{id}', [TodoController::class, 'deleteItem'])->name('todo.delete');
Route::get('/edit/{id}', [TodoController::class, 'editItem'])->name('todo.edit');
Route::put('/edit/{id}', [TodoController::class, 'updateItem'])->name('todo.update');


