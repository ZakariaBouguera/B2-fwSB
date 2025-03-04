<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AtelierController;
use App\Http\Controllers\ParticipationsController;
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

Route::get('/clients/enregistrement' , [ClientController::class , 'enregistrement']);
#Route::get('/clients/enregistrement', function () {
#   return "Bienvenue sur notre site";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/clients/enregistrer' , [ClientController::class , 'enregistrer']);
#Route::get('/clients/enregistrer', function () {
#   return "Vous êtes enregistrer ";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/clients/connexion' , [ClientController::class , 'connexion']);
#Route::get('/clients/connexion', function () {
#   return "Connecter vous  ";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/clients/connecter' , [ClientController::class , 'connecter']);
#Route::get('/clients/connecter', function () {
#   return "Vous êtes connecter ";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/clients/espace' , [ClientController::class , 'espace']);
#Route::get('/clients/espace', function () {
#   return "Vous êtes dans l'espace client ";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/clients/profil' , [ClientController::class , 'profil']);
#Route::get('/clients/profil', function () {
#   return "Vous êtes sur votre profil ";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/clients/deconnecter' , [ClientController::class , 'deconnecter']);
#Route::get('/clients/deconnecter', function () {
#   return "Vous êtes deconnecter ";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/ateliers/programmes', [AtelierController::class, 'programmes']);
#Route::get('/ateliers/programmes', function () {
#   return "Vous êtes dans sur la page de votre programme ";
#});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
Route::get('/ateliers/passes',[AtelierController::class, 'passes']);
#Route::get('/ateliers/passes', function () {
#    return "Vous êtes dans sur la page des ateliers passer ";
#});     
Route::get('/participations/{num}/proceder',[ParticipationsController::class, 'proceder']);
#Route::get('/participations/{num}/proceder', function ($num) {
#    return "Vous avez participer a  ";
#}) -> where('num','[0-9]+') ;                
Route::get('/participations/{num}/annuler',[ParticipationsController::class,'annuler']);
#Route::get('/participations/{num}/annuler', function ($num) {
#    return "Vous avez annuler votre participation a  ";
#}) -> where('num','[0-9]+') ;                

Route::get('/ateliers/{num}/commentaires/voir',[AtelierController::class,'commentaires']);
#Route::get('/ateliers/{num}/commentaires/voir', function ($num) {
#    return "Voicit les commentaires  ";
#}) -> where('num','[0-9]+') ;                
Route::get('/ateliers/{num}/commenter',[AtelierController::class,'commenter']);
#Route::get('/ateliers/{num}/commenter', function ($num) {
#   return "Ajouter un commentaire   ";
#}) -> where('num','[0-9]+') ; 

Route::Fallback(function(){
    return redirect('/');
});