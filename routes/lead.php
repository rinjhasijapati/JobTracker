<?php

use App\Http\Controllers\Leads\LeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function(){
    Route::post('/add/newlead',[LeadController::class,'addNewLead'])->name('newlead.add');
    Route::get('/showlead/{id}',[LeadController::class,'displayLeadDetails'])->name('lead.showdetails');

    // routes/web.php
    Route::patch('/update-task-status/{taskId}', [LeadController::class,'updateLeadStatus'])->name('lead.updateStatus');


});






