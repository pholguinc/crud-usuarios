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
    Route::get('/admin/cajas', [BoxController::class, 'index'])->name('admin.boxes');
    Route::get('/admin/cajas/gastos', [BoxController::class, 'expenses'])->name('admin.boxes.expenses');
    Route::get('/admin/cajas/movimientos', [BoxController::class, 'movements'])->name('admin.boxes.movements');
    Route::get('/admin/categorias', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/admin/productos', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/moneda', [CoinController::class, 'index'])->name('admin.coins');
    Route::get('admin/documento', [DocumentController::class, 'index'])->name('admin.document.index');
    Route::get('/admin/empresa', [CompanyController::class,'index'])->name('admin.company.index');
    Route::get('/admin/clientes', [ClientController::class, 'index'])->name('admin.clients.index');
    Route::get('/admin/clientes/create', [ClientController::class, 'create'])->name('admin.clients.create');
    Route::post('/admin/clientes', [ClientController::class, 'store'])->name('admin.clients.store');
    Route::get('/admin/clientes/{client}/edit', [ClientController::class, 'edit'])->name('admin.clients.edit');
    Route::put('/admin/clientes/{client}', [ClientController::class, 'update'])->name('admin.clients.update');
    Route::delete('/admin/clientes/{client}', [ClientController::class, 'destroy'])->name('admin.clients.destroy');
    Route::get('/admin/proveedores', [ProviderController::class, 'index' ])->name('admin.providers.index');
    Route::get('/admin/proveedores/create', [ProviderController::class, 'create' ])->name('admin.providers.create');
    Route::post('/admin/proveedores', [ProviderController::class, 'store' ])->name('admin.providers.store');
    Route::get('/admin/proveedores/{provider}/edit', [ProviderController::class, 'edit' ])->name('admin.providers.edit');
    Route::put('/admin/proveedores/{provider}', [ProviderController::class, 'update' ])->name('admin.providers.update');
    Route::delete('/admin/proveedores/{provider}', [ProviderController::class, 'destroy' ])->name('admin.providers.destroy');

});



