<?php
namespace App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/home',[HomeController::class,'indo'])->middleware(['auth'])->name('home');


Route::get('/ajouter.candidat',[CandidatController::class,'index'])->name('ajouter');
Route::get('/liste.candidat',[CandidatController::class,'liste'])->name('liste.candidat');
Route::post('/enregistrer.candidat',[CandidatController::class,'store'])->name('store.candidat');
Route::get('/supprimer.candidat/{id}',[CandidatController::class,'destroy'])->name('delete-candidat');
Route::get('/editer.candidat/{id}',[CandidatController::class,'edit'])->name('edit-candidat');
Route::post('/modifier.candidat/{id}',[CandidatController::class,'update'])->name('update-candidat');



Route::get('/electeur',[ElecteurController::class,'index'])->name('electeur');
Route::post('/storeelecteurs',[ElecteurController::class,'store'])->name('enregistrerElecteur');
Route::get('/liste-electeur',[ElecteurController::class,'liste'])->name('liste1');


Route::get('/resultats-sondage', [ElecteurController::class, 'resultatsSondage'])->name('resultats.sondage');


Route::get('/programme-candidat', [CandidatController::class, 'programmeCandidat'])->name('programme-candidat');
Route::post('/like-programme/{candidat}/{type}', [LikeController::class, 'LikeProgramme'])->name('like-programme');

Route::get('/nav', function () {
    return view('nav');
});
Route::get('/accueil', function () {
    return view('accueil');
});