<?php

use App\Http\Controllers\Leads\LeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function(){
    // [LeadController::class,'addNewLead']
    Route::post('/add/newlead',[LeadController::class,'addNewLead'])->name('newlead.add');

});






