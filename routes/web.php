<?php

use Illuminate\Support\Facades\Route;
Route::resource('users', 'App\Http\Controllers\UserController');


use App\Http\Controllers\UserController;

// Rota para exibir o formulário de criação de usuário
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Rota para salvar o usuário criado
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Rota para listar todos os usuários
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Rota para visualizar um usuário específico
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

// Rota para exibir o formulário de edição de um usuário
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Rota para atualizar um usuário
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Rota para excluir um usuário
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');



Route::get('/', function () {
    return view('welcome');
});
