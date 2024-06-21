<?php

use App\Http\Controllers\InscriptionController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/inscription', [InscriptionController::class, 'showForm'])->name('inscription.form');
Route::post('/inscription', [InscriptionController::class, 'submitForm'])->name('inscription.submit');

Route::get('/admin/inscriptions', [InscriptionController::class, 'index'])->name('inscriptions.index');


use App\Http\Controllers\InscriptionStatusController;

Route::post('/inscriptions/accept/{id}', [InscriptionStatusController::class, 'accept'])->name('inscriptions.accept');
Route::post('/inscriptions/reject/{id}', [InscriptionStatusController::class, 'reject'])->name('inscriptions.reject');

use Illuminate\Support\Facades\Mail;



Route::get('/test-mail', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('hello@example.com')
                ->subject('Test Mail');
    });

    return 'Mail sent!';
});


