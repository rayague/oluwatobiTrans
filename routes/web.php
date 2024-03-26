<?php

// URL::forceScheme('https');
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\URL;

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
Route::get('réalisations', [ViewsController::class,'realisations'])->name('realisations');
Route::get('a-propos', [ViewsController::class,'about'])->name('about');
Route::get('private/dashbord', [ViewsController::class, 'privateDashboard'])->name('privateDashboard')->middleware(['auth', 'verified']);

Route::post('ajouter-un-poste', [PostController::class,'addPost'])->name('addPost');
Route::put('modifier-un-poste/{id}', [PostController::class,'updatePost'])->name('updatePost');
Route::get('editer-un-post/{id}', [ViewsController::class,'editPost'])->name('editPost');
Route::post('editer-un-post/{id}', [PostController::class,'deletePost'])->name('deletePost');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';