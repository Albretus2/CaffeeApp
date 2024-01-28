<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\StoreReservasiController;
use App\Models\Menu;
use App\Models\Reservasi;
use App\Models\Table;
use App\Models\User;
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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function (Menu $menu, Table $table, Reservasi $reservasi, User $user) {
    return view('landingPages.index', [
        'menues' =>  $menu->latest()->get(),
        'reservasi' => $reservasi->all(),
        'user' => $user,
        'table' => $table->all()
    ]);
})->name('HOME');




Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginStore');

        Route::get('/sign', 'sign');
        Route::post('/sign', 'signStore');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function (Reservasi $reservasi, User $user) {
        return view('dashboard.index', [
            'dataReservasi' => Reservasi::where('user_id', auth()->user()->id)->get()
        ]);
    });

    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth'); // ROute ynag berfungsi untuk logout .

    // store reservasi
    Route::post('/dashboard/reservasi', [StoreReservasiController::class, 'store']);

    // Rute untuk halaman dashboard admin dan super admin
    Route::middleware('role')->group(function () {
        Route::resource('/dashboard/menu', MenuController::class)->except('show');
        Route::resource('/dashboard/reservasi', ReservasiController::class)->except('create', 'store', 'edit', 'show');
        Route::resource('/dashboard/gallery', GalleryController::class);
    });
});
