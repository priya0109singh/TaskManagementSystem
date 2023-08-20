<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
  
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return redirect('tasks');
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::put('/tasks/{task}/completed', [TaskController::class, 'markAsCompleted'])->name('tasks.markAsCompleted');
Route::put('/tasks/{task}/pending', [TaskController::class, 'markAsPending'])->name('tasks.markAsPending');
// Route::get('task/{id}', [TaskController::class, 'updateStatus']);

Route::resource('tasks', TaskController::class);



