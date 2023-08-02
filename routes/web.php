<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified']);

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/hospital', [HospitalController::class, 'index'])->name('hospital');

Route::get('/reservation', [HospitalController::class, 'reservation_hospital_index'])->middleware(['auth', 'verified'])->name('reservation');
Route::get('/reservationhospital/{id}', [HospitalController::class, 'reservation_hospital'])->middleware(['auth', 'verified']);
Route::post('/reservation_hospital_process', [HospitalController::class, 'reservation_hospital_process']);

Route::get('/help', function(){
    return view('help');
})->middleware(['auth', 'verified'])->name('help');
Route::post('/help_hospital_process', [HospitalController::class, 'help_hospital_process']);


Route::get('/hospitaladmin', [AdminController::class, 'indexadmin'])->middleware(['auth', 'verified'])->name('hospitaladmin');

Route::get('/addhospital', function () {
    return view('Admin.addHospital');
})->middleware(['auth', 'verified']);
Route::post('/add_hospital_process', [AdminController::class, 'add_hospital_process']);

Route::get('/edithospital/{id}', [AdminController::class, 'hospitalInfo'])->middleware(['auth', 'verified']);
Route::post('/edit_hospital_process/{id}', [AdminController::class, 'edit_hospital_process']);

Route::get('/hospitaladmin/delete_hospital/{id}', [AdminController::class, 'delete_hospital']);

Route::get('/managereservation', [AdminController::class, 'manage_reservation'])->middleware(['auth', 'verified'])->name('Admin.manageReservation');
Route::get('/add_reservation_done/{id}', [AdminController::class, 'add_reservation_done'])->name('add_done');

Route::get('/managehelp', [AdminController::class, 'manage_help'])->middleware(['auth', 'verified'])->name('Admin.manageHelp');
Route::get('/add_help_done/{id}', [AdminController::class, 'add_help_done'])->name('add_delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

