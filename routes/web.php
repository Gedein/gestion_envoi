<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompteControl;


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
/*

Route::get('/', function () {
    return view('connexion');
});
*/
Route::get('/accueil',[CompteControl::class,'homepage']) ->name('accueil');
Route::get('/ajouter',[CompteControl::class,'addaccount'])->name('ajouter')->middleware('auth');
Route::post('/ajouter',[CompteControl::class,'storeaccount'])-> name('account.store');
Route::post('/debit',[CompteControl::class,'debitercompt'])-> name('account.debit')->middleware('auth');
Route::get('/credit/{id}',[CompteControl::class,'crediter']) ->name('credit')->middleware('auth');
Route::post('/credit',[CompteControl::class,'creditercompte'])-> name('account.credit')->middleware('auth');
Route::get('/chercher',[CompteControl::class,'showacount'])->name('account.show')->middleware('auth');
Route::get('/account/{id}',[CompteControl::class,'showfull'])->name('account.id')->middleware('auth');
Route::get('/account_information/{id}',[CompteControl::class,'showinformation'])->name('account.information')->middleware('auth');
Route::get('/debit/{id}',[CompteControl::class,'debiter'])->name('debit')->middleware('auth');
Route::get('/account_delete/{id}',[CompteControl::class,'deleteaccount'])->name('account.delete')->middleware('auth');
Route::get('/rapport_journalier',[CompteControl::class,'rapportj'])->name('rapport.journalier')->middleware('auth');
Route::get('/rapport_hebdomadaire',[CompteControl::class,'rapporth'])->name('rapport.hebdomadaire')->middleware('auth');
Route::get('/rapport_mensuel',[CompteControl::class,'rapportm'])->name('rapport.mensuel')->middleware('auth');
Route::get('/all',[CompteControl::class,'allfordebit'])->name('allfordebit')->middleware('auth');
Route::get('/allc',[CompteControl::class,'allforcredit'])->name('allforcredit')->middleware('auth');


Route::get('gestion', function () {
    return view('gestion');
}) ->name('gestion')
->middleware('auth');

Route::get('information', function () {
    return view('information_compte');
}) ->name('info')
->middleware('auth');
Route::get('error', function () {
    return view('error');
}) ->name('error')
->middleware('auth');
Route::get('error2', function () {
    return view('error2');
}) ->name('error2');
Route::get('success', function () {
    return view('success');
}) ->name('success');


Route::get('rapport', function () {
    return view('rapport');
}) ->name('rapport')
->middleware('auth');


Route::get('/pdf_comt/{id}',[CompteControl::class,'dowlodinformation'])->name('cmt_pdf')->middleware('auth');
Route::get('/pdf_rapportj',[CompteControl::class,'pdfj'])->name('pdfj')->middleware('auth');
Route::get('/pdf_rapporth',[CompteControl::class,'pdfh'])->name('pdfh')->middleware('auth');
Route::get('/pdf_rapportm',[CompteControl::class,'pdfm'])->name('pdfm')->middleware('auth');



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return view('auth.login');
}) ->name('home')
->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
}) ->name('home')
->middleware('auth');