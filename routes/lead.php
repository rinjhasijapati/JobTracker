<?php

use App\Http\Controllers\Leads\LeadController;
use App\Http\Controllers\Leads\LeadDetailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'verified'])->group(function(){
    Route::post('/add/newlead',[LeadController::class,'addNewLead'])->name('newlead.add');
    Route::post('/quick/newlead',[LeadController::class,'quickAddLead'])->name('quicknewlead.add');
    Route::get('/showlead/{id}',[LeadDetailsController::class,'getLeadDetails'])->name('lead.showdetails');

    Route::get('/edit/{id}',[LeadDetailsController::class,'showEditLeadDetailsForm'])->name('lead.showeditdetailsform');
    Route::post('/updatelead/{id}',[LeadDetailsController::class,'updateLeadDetails'])->name('lead.updateleaddetails');


    // Route::post('/quick/newlead',[LeadController::class,'quickAddLead'])->name('quicknewlead.add');


    // routes/web.php
    Route::patch('/update-task-status/{taskId}', [LeadController::class,'updateLeadStatus'])->name('lead.updateStatus');
    Route::post('/update-task-status/{taskId}', [LeadController::class,'updateLeadStatusFromDetails'])->name('lead.updateStatusFormDetails');
    

});






