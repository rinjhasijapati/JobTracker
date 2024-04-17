<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function addNewLead(Request $req){
       
        $jobtitle =  $req->jobtitle;
        $listingurl =  $req->listingurl;
        $joblocation =  $req->joblocation;
        $compensation =  $req->compensation;
        $contracttype =  $req->contracttype;
        $jobdescription =  $req->jobdescription;

        $companyName = $req->companyname;
        $companywebsite =  $req->companywebsite;
        $companysummary =  $req->companysummary;
        dd($companyName,$companywebsite,$companysummary,$jobtitle,$listingurl,$joblocation,$compensation,$contracttype,$jobdescription);
    }
}
