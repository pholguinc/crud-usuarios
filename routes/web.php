<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\InactiveModules;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return Inertia::render('Dashboard');
    })->name('admin');
});*/



Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.index');
    Route::get('/admin/modulos', [AdminController::class, 'admin'])->name('admin.index');
    Route::get('/admin/mantenimiento', [AdminController::class, 'maintenance'])->name('admin.maintenance');
    Route::get('/admin/usuarios',[UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/usuarios/create',[UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/usuarios',[UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/usuarios/{user}/edit',[UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/usuarios/{user}',[UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/usuarios/{user}',[UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/usuarios-inactivos', [UserController::class, 'inactive'])->name('admin.users.inactive');
});



