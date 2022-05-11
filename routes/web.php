<?php

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

Route::statamic('search', 'search', [
   'title' => 'Sök Resultat',

]);

Route::statamic('camps', 'travel_camp/index');
Route::statamic('cups', 'travel_cup/index');
Route::statamic('matches', 'travel_matches/index');
Route::statamic('soccers', 'travel_soccer/index');
Route::statamic('travels', 'wcm_travel/index');