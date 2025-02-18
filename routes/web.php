<?php

use App\Http\Controllers\PageViewController;
use App\Http\Controllers\PetHelpRequestController;
use App\Http\Controllers\ShelterController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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

Route::get('/home', [PageViewController::class, 'homePage'])->name('web.home');
Route::get('/about', [PageViewController::class, 'aboutPage'])->name('web.about');
Route::get('/contact', [PageViewController::class, 'contactPage'])->name('web.contact');


Route::get('/lost-pet', [PageViewController::class, 'lostPet'])
    ->name('web.lostPet');
Route::get('/lost-pet-list', [PetHelpRequestController::class, 'index'])
    ->name('web.lostPetIndex');
Route::get('/lost-pet-view/{id}', [PetHelpRequestController::class, 'view'])
    ->name('web.lostPetView');
Route::post('/lost-pet-store', [PetHelpRequestController::class, 'store'])
    ->name('web.lostPetStore');


Route::get('/shelter-list', [ShelterController::class, 'index'])
    ->name('web.shelterIndex');
Route::get('/shelter-view/{id}', [ShelterController::class, 'view'])
    ->name('web.shelterView');



Route::get('/find-pet', [PageViewController::class, 'findPet'])->name('web.findPet');


Route::get('/getNearbyPlaces', [PageViewController::class, 'getNearbyPlaces'])->name('web.getNearbyPlaces');


/// fix Livewire3

Livewire::setScriptRoute(function ($handle) {
    return Route::get(env('Livewire_URL') . '/livewire.js', $handle);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(env('Livewire_URL') . '/update', $handle);
});
/// fix Livewire3




