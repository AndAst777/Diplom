<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Game;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('main');
// });


Route::get('/', [PostController::class, 'posts'])->name('main');
Route::get('post/{post}', [PostController::class, 'show'])->name('post');
Route::post('post/create', [PostController::class, 'store'])->name('post.store');
Route::put('post/{post}/edit', [PostController::class, 'update'])->name('post.update');
Route::post('post{post}', [PostController::class, 'delete'])->name('post.delete');
Route::get('/publications', [PostController::class, 'publications'])->name('publications');


Route::get('games', [GameController::class, 'showGames'])->name('games');
Route::post('game/create', [GameController::class, 'store'])->name('game.store');
Route::get('game/{game}', [GameController::class, 'show'])->name('game.show');
Route::post('game{game}', [GameController::class, 'destroy'])->name('game.destroy');
Route::get('admin/games', [GameController::class, 'gameadmin'])->name('game.admin');
Route::post('game/{game}/edit', [GameController::class, 'update'])->name('game.update');
// Route::get('/', [CategoryController::class, 'categories'])->name('categories');



Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');


Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/admin/moderation', [AdminController::class, 'moderation'])->name('admin.moderation');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::put('post/{post}/post-status', [AdminController::class, 'to_publish'])->name('post.publish');
Route::post('user{user}', [AdminController::class, 'userDestroy'])->name('users.destroy');
