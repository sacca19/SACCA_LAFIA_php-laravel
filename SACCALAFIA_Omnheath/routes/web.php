<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UpdateController;

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

Route::get('/Inscription',[AuthController::class, 'get_Inscription'])->name('get-Inscription');
Route::post('/Inscription',[AuthController::class, 'Inscription'])->name('Inscription');
Route::get('/Connexion',[AuthController::class, 'get_Connexion'])->name('get-Connexion');
Route::post('/Connexion',[AuthController::class, 'Connexion'])->name('Connexion');
Route::get('/Home',[HomeController::class, 'Connexion'])->name('Home');
Route::get('/Contact',[ContactsController::class,'Contact'])->name('Contact');
Route::get('/Ajouter',[UpdateController::class, 'Ajouter'])->name('Ajouter');
Route::get('/Modifier',[UpdateController::class, 'Modifier'])->name('Modifier');
Route::get('/Supprimer',[UpdateController::class, 'Supprimer'])->name('Supprimer');


