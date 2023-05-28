<?php

use App\Http\Controllers\Api\AuthorController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\CategoeyController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth_api')->get('user/{id}', function (Request $request, $id){
    $user = \App\Models\User::find($id);
    if(!$user) return response('', 404);
    return $user;
});

/*
Route::apiResources([
    'categories' => CategoeyController::class,
]);
*/

// CRUD Категорий
Route::get('/categories', [CategoeyController::class, 'index']);
Route::get('/categories/{categoryId}', [CategoeyController::class, 'show']);
Route::middleware('auth_api')->post('/categories', [CategoeyController::class, 'store']);
Route::middleware('auth_api')->put('/categories/{categoryId}', [CategoeyController::class, 'update']);
Route::middleware('auth_api')->delete('/categories/{categoryId}', [CategoeyController::class, 'destroy']);

// CRUD Книг
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{bookId}', [BookController::class, 'show']);
Route::middleware('auth_api')->post('/books', [BookController::class, 'store']);
Route::middleware('auth_api')->put('/books/{bookId}', [BookController::class, 'update']);
Route::middleware('auth_api')->delete('/books/{bookId}', [BookController::class, 'destroy']);

// CRUD Авторов
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{authorId}', [AuthorController::class, 'show']);
Route::middleware('auth_api')->post('/authors', [AuthorController::class, 'store']);
Route::middleware('auth_api')->put('/authors/{authorId}', [AuthorController::class, 'update']);
Route::middleware('auth_api')->delete('/authors/{authorId}', [AuthorController::class, 'destroy']);

// register User
Route::post('/users', [UserController::class, 'store']);
Route::middleware('auth_api')->put('/users/{userId}', [UserController::class, 'update']);
Route::middleware('auth_api')->delete('/users/{userId}', [UserController::class, 'destroy']);



