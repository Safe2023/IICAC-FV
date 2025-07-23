<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\CibleController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisiteurController;
use App\Models\Equipe;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::get('apropos', function () {
    return view('apropos');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('evenement', function () {
    return view('evenement');
});
Route::get('service', function () {
    return view('service');
});
Route::get('restaurant', function () {
    return view('restaurant');
});


Route::get('categorie', [ServiceController::class, 'create']);
Route::post('categorie', [ServiceController::class, 'store'])->name('categorie');
Route::get('/update_categorie/{id}', [ServiceController::class, 'edit'])->name('edit');
Route::put('/update_categorie/{id}', [ServiceController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ServiceController::class, 'destroy'])->name('delete');

Route::post('contact', [ServiceController::class, 'envoie_mail'])->name('envoie_mail');
Route::post('newsletter', [ServiceController::class, 'newsletter'])->name('newsletter');
Route::get('/table_categorie', [ServiceController::class, 'table_categorie'])->name('table_categorie');

/* Route::get('/evenements/categorie/{id}', [ServiceController::class, 'event_Categorie'])->name('event_Categorie');
 */

Route::get('cible', [CibleController::class, 'creats']);
Route::post('cible', [CibleController::class, 'stor'])->name('cible');
Route::get('/cible/{id}', [CibleController::class, 'edite'])->name('edite');
Route::put('/cible/{id}', [CibleController::class, 'updat'])->name('update_cible');
Route::get('/table_cible', [CibleController::class, 'table_cible'])->name('table_cible');
Route::delete('/deletes/{id}', [CibleController::class, 'destroys'])->name('deletes');


Route::get('ajout_event', [EvenementController::class, 'creates']);
Route::post('ajout_event', [EvenementController::class, 'stores'])->name('ajout_event');
Route::get('/update_event/{id}', [EvenementController::class, 'editees'])->name('editees');
Route::put('/update_event/{id}', [EvenementController::class, 'updatees'])->name('update_event');
Route::delete('/delete_event/{id}', [EvenementController::class, 'destroyes'])->name('delete_event');

Route::get('/', [EvenementController::class, 'index'])->name('welcome');
Route::get('/evenements/{id}', [EvenementController::class, 'index'])->name('evenements.show');
Route::get('/evenements', [EvenementController::class, 'filtre'])->name('filtre');
Route::get('/evenements/categorie/{id}', [EvenementController::class, 'event_Categorie'])->name('event_Categorie');
Route::get('/evenement', [EvenementController::class, 'evenement'])->name('evenement');
Route::get('/table_evenement', [EvenementController::class, 'table_evenement'])->name('table_evenement');


Route::get('galerie', [GalerieController::class, 'createes']);
Route::post('galerie', [GalerieController::class, 'storees'])->name('galerie');
Route::get('/update_galerie/{id}', [GalerieController::class, 'edites'])->name('edites');
Route::put('/update_galerie/{id}', [GalerieController::class, 'updates'])->name('update_galerie');
Route::get('/table_galerie', [GalerieController::class, 'table_galerie'])->name('table_galerie');
Route::delete('/suprimer/{id}', [GalerieController::class, 'suprimer'])->name('suprimer');


Route::get('ajout_actualite', [ActualiteController::class, 'creatx']);
Route::post('ajout_actualite', [ActualiteController::class, 'storex'])->name('ajout_actualite');
Route::get('/update_actu/{id}', [ActualiteController::class, 'editx'])->name('editx');
Route::put('/update_actu/{id}', [ActualiteController::class, 'updatex'])->name('update_actu');
Route::get('/table_actu', [ActualiteController::class, 'table_actu'])->name('table_actu');
Route::delete('/destroyx/{id}', [ActualiteController::class, 'destroyx'])->name('destroyx');
Route::get('/actualite', [ActualiteController::class, 'actu'])->name('actualite');

Route::get('ajout_resto', [RestaurantController::class, 'creation']);
Route::post('ajout_resto', [RestaurantController::class, 'creations'])->name('ajout_resto');
Route::get('/table_resto', [RestaurantController::class, 'table_resto'])->name('table_resto');
Route::delete('/delete_resto/{id}', [RestaurantController::class, 'delete_resto'])->name('delete_resto');
Route::get('/update_resto/{id}', [RestaurantController::class, 'edit_resto'])->name('edit_resto');
Route::put('/update_resto/{id}', [RestaurantController::class, 'update_resto'])->name('update_resto');
Route::get('restaurant', [RestaurantController::class, 'restaurant'])->name('restaurant');

Route::get('ajout_equipe', [EquipeController::class, 'create_equipe']);
Route::post('ajout_equipe', [EquipeController::class, 'store_equipe'])->name('ajout_equipe');
Route::get('/table_equipe', [EquipeController::class, 'table_equipe'])->name('table_equipe');
Route::delete('/destroy_equipe/{id}', [EquipeController::class, 'destroy_equipe'])->name('destroy_equipe');
Route::get('/update_equipe/{id}', [EquipeController::class, 'edit_equipe'])->name('edit_equipe');
Route::put('/update_equipe/{id}', [EquipeController::class, 'update_equipe'])->name('update_equipe');


Route::get('/home', [VisiteurController::class, 'visiteur'])->name('home');

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
