<?php

use App\Http\Controllers\WizardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WizardController::class,'welcome'])->name('welcome');

Route::get('/platform',[WizardController::class,'platform'])->name('platform');

Route::get('/kingcross',[WizardController::class,'kingcross'])->name('kingcross');

Route::get('/hogwarts',[WizardController::class,'castle'])->name('castle');

Route::get('/houses',[WizardController::class,'houses'])->name('houses');

Route::get('/sorcerers/{id}',[WizardController::class,'wizards'])->name('wizards');
Route::get('/edit/{id}',[WizardController::class,'edit'])->name('edit');
Route::put('/editAction/{id}',[WizardController::class,'editAction'])->name('editAction');
Route::delete('/delete/{id1}/{id2}',[WizardController::class,'destroy'])->name('destroy');

Route::get('/details/{id}',[WizardController::class,'details'])->name('details');

Route::get('/recruit',[WizardController::class,'recruit'])->name('recruit');
Route::post('/recruitAction',[WizardController::class,'recruitAction'])->name('recruitAction');

Route::get('/cast',[WizardController::class,'cast'])->name('cast');

Route::get('/quiz',[WizardController::class,'quiz'])->name('quiz');
Route::post('/quizAction',[WizardController::class,'quizAction'])->name('quizAction');