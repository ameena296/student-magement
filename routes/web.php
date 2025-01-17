<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
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
Route::get('/admin/dashboard', [DashboardController::class, "getDashboard"]);
Route::get('/', [HomeController::class, "index"]);
Route::post('/post-login',[HomeController::class, "postLogin"]);
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('logout', [HomeController::class, "logout"]);
});

Route::get('/students', [StudentController::class, "index"])->name('students.index');
Route::post('/students', [StudentController::class, "store"])->name('students.store');