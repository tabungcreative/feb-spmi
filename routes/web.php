<?php

use App\Helper\AuthUser;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
// Route::get('/', function () {
//     return AuthUser::user();
// });
Route::get('/berita/detail/{id}', [\App\Http\Controllers\WelcomeController::class, 'detailBerita'])->name('detail-berita');
Route::get('/pengumuman/detail/{id}', [\App\Http\Controllers\WelcomeController::class, 'detailPengumuman'])->name('detail-pengumuman');
Route::get('/dokumen-mutu/detail/{id}', [\App\Http\Controllers\WelcomeController::class, 'dokumenMutu'])->name('welcome.dokumen-mutu');
Route::get('/welcome/penelitian', [\App\Http\Controllers\WelcomeController::class, 'penelitian'])->name('welcome.penelitian');
Route::get('/welcome/pengabdian', [\App\Http\Controllers\WelcomeController::class, 'pengabdian'])->name('welcome.pengabdian');

Route::get('/detail-documen-mutu/{id}', [\App\Http\Controllers\WelcomeController::class, 'detailDokumenMutu'])->name('welcome.detail-dokumen-mutu');

Route::controller(AuthController::class)
    ->prefix('auth')
    ->as('auth.')
    ->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/callback', 'callback')->name('callback');
    });


Route::middleware(['custom-auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/pengumuman', \App\Http\Controllers\PengumumanController::class);
    Route::resource('/penelitian', \App\Http\Controllers\PenelitianController::class)->except(['show']);
    Route::resource('/pengabdian', \App\Http\Controllers\PengabdianController::class)->except(['show']);
    Route::resource('/paper-ilmiah', \App\Http\Controllers\PaperIlmiahController::class)->except(['show']);
    Route::resource('/penjaminan-mutu', \App\Http\Controllers\PenjaminanMutuController::class)
        ->except(['show']);

    Route::resource('/dokumen-mutu', \App\Http\Controllers\DokumenMutuController::class);
    Route::get('/dokumen-mutu/list/show/{id}', [\App\Http\Controllers\DokumenMutuController::class, 'listShow'])->name('dokumen-mutu.list.show');
    Route::get('/dokumen-mutu/create/{id}', [\App\Http\Controllers\DokumenMutuController::class, 'createById'])->name('dokumen-mutu.create.id');
    Route::resource('/audit', \App\Http\Controllers\AuditController::class)->except(['show']);
    Route::resource('/file-dokumen', \App\Http\Controllers\FileDokumenController::class)->only(['store', 'destroy']);
    Route::resource('/dosen', \App\Http\Controllers\DosenController::class);
    Route::resource('/berita', \App\Http\Controllers\BeritaController::class);
    Route::resource('/user', \App\Http\Controllers\UserController::class);
    Route::get('users/change-password', [\App\Http\Controllers\UserController::class, 'changePasswordGet'])->name('users.change-password-get');
    Route::post('users/change-password', [\App\Http\Controllers\UserController::class, 'changePasswordPost'])->name('users.change-password-post');
});
