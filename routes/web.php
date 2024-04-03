<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\StoreReservasiController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\UserController;
use App\Models\Gallery;
use App\Models\Reservasi;
use App\Models\User;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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


// Route untuk halaman landing pages
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [LandingPage::class, 'index'])->name('HOME');
Route::get('/gallery', [LandingPage::class, 'gallery']);
Route::get('/news', [LandingPage::class, 'news']);
Route::get('/post/{news}', [LandingPage::class, 'post']);
// ------------------------end//


// ROute yang hanya bisa di akses oleh user yang belum melakukan login
Route::middleware('guest')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'loginStore');

        Route::get('/sign', 'sign');
        Route::post('/sign', 'signStore');
    });
});
// ---------------------------end//


// Route yang hanya bisa di akses oleh user yang sudah melakukan authentikasi atau login
Route::middleware('auth')->group(function () {
    // ROute untuk menampilkan halaman dashboard user/admin/super admin
    Route::get('/dashboard', function (Reservasi $reservasi, User $user, Todo $todo) {
        // untuk manambahkan tanggal saat ini
        $tanggal = Carbon::now()->format('d, M Y');
        return view('dashboard.index', [
            'dataReservasi' => Reservasi::where('user_id', auth()->user()->id)->get(),
            'reservasi' => $reservasi,
            'user' => $user,
            'todos' => Todo::where('user_id', auth()->user()->id)->get(),
            'date' => $tanggal,
        ]);
    });
    // end //

    // route untuk mevalidasi data todolist
    Route::post('/todolist', [TodoListController::class, 'store']);
    // route yang berfungsi untuk menghapus todolist
    Route::delete('/todolist/{todo}', [TodoListController::class, 'destroy']);
    // end//

    // route yang berfungsi untuk logout
    Route::post('/logout', [AuthController::class, 'logout']); // ROute ynag berfungsi untuk logout .
    // end //

    // Route untuk mevalidasi data reservasi yang hanya bisa di akses oleh user yang sudah terauthentikasi
    Route::post('/dashboard/reservasi', [StoreReservasiController::class, 'store']);
    // end //

    // Rute yang hanya bisa di akses oleh admin dan super admin
    Route::middleware('role')->group(function () {
        Route::resource('/dashboard/menu', MenuController::class)->except('show');
        Route::resource('/dashboard/reservasi', ReservasiController::class)->except('create', 'store', 'edit', 'show');
        Route::resource('/dashboard/gallery', GalleryController::class)->except('create', 'edit', 'show');
        Route::resource('/dashboard/user', UserController::class)->except('show', 'edit');
        Route::resource('/dashboard/news', NewsController::class);
    });
    // end--//
});
// -----------------------end//
