<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FormController;

Route::get('/', [Controller::class,'welcome']);

Route::get('/hello',[Controller::class,'index']);

Route::get('/form', [Controller::class,'form']);

Route::get('/payrollTaxes', [Controller::class,'payrollTaxes']);

Route::post('/formSubmit', [FormController::class, 'formSubmit'])->name('formSubmit');