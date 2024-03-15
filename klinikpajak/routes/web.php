<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\LoginKonsultanController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\RegisterKonsultanController;
use App\Http\Controllers\RegisteruserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePajakController;
use App\Http\Controllers\LogoutController;

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

//Route::get('/', function () {
//return view('welcome');
//});

// Route::get('/', [HomeController::class, 'index']);
// Route::get('contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('/user/{id}', function ($id) {
//     return 'User dengan ID ' . $id;
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return 'Admin Dashboard';
//     });

//     Route::get('/users', function () {
//         return 'Admin Users';
//     });
// });

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

// Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);


// Login  Admin Route
Route::get('/loginadmin_webpajak', [LoginAdminController::class, 'showLoginForm'])->name('login.admin');
Route::post('/loginadmin_webpajak', [LoginAdminController::class, 'login']);

// Login User Route
Route::get('/loginuser_webpajak', [LoginUserController::class, 'showLoginForm'])->name('login.user');
Route::post('/loginuser_webpajak', [LoginUserController::class, 'login']);

// Login Konsultan Route
Route::get('/loginkonsultan_webpajak', [LoginKonsultanController::class, 'showLoginForm'])->name('login.konsultan');
Route::post('/loginkonsultan_webpajak', [LoginKonsultanController::class, 'login']);

//Logout
Route::get('/logout_webpajak', [LogoutController::class, 'logout'])->name('logout');

//Regiter Admin Route
Route::get('/registeradmin_webpajak', [RegisterAdminController::class, 'showRegistrationForm'])->name('register.admin');
Route::post('/registeradmin_webpajak', [RegisterAdminController::class, 'register']);

// Register Konsultan Route
Route::get('/registerkonsultan_webpajak', [RegisterKonsultanController::class, 'showRegistrationForm'])->name('register.konsultan');
Route::post('/registerkonsultan_webpajak', [RegisterKonsultanController::class, 'register']);

// Register User Route
Route::get('/registeruser_webpajak', [RegisterUserController::class, 'showRegistrationForm'])->name('register.user');
Route::post('/registeruser_webpajak', [RegisterUserController::class, 'register']);

// Dashboard Route
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard_webpajak',  [DashboardController::class, 'index'])->name('dashboard');
});

//Home pajak
Route::get('/Homepajak', [HomePajakController::class, 'index']);
