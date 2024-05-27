<?php

use App\Http\Controllers\Contact\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function(){
    
    Route::post('/addcontact/{jobId}',[ContactController::class,'addContact'])->name('contact.add');
    Route::post('/contactedit/{jobId}',[ContactController::class,'editContact'])->name('contact.edit');

    Route::get('/contactdelete/{id}',[ContactController::class,'deleteContact'])->name('contact.delete');


});