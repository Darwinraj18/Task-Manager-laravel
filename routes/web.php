<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/create', [ProductController::class, 'create'])->name('products.create'); // Corrected route name
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store'); // Also corrected store route
Route::get('/product/index', [ProductController::class, 'index'])->name('products.index'); // Also corrected store route


Route::get('/Task/index', [TaskController::class, 'index'])->name('Tasks.index'); // Also corrected store route
Route::get('/Task/create', [TaskController::class, 'create'])->name('Tasks.create'); // Also corrected store route
Route::post('/Task/store', [TaskController::class, 'store'])->name('Tasks.store'); // Also corrected store route
Route::delete('/Task/{id}', [TaskController::class, 'destroy'])->name('Tasks.destroy');
Route::get('/Task/edit/{id}', [TaskController::class, 'edit'])->name('Tasks.edit');
Route::put('/Task/update/{id}', [TaskController::class, 'update'])->name('Tasks.update');
Route::get('/Task/filter/{status}', [TaskController::class, 'filter'])->name('Tasks.filter');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);






?>

