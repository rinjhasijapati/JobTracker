<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\RotatingFileHandler;

class LeadController extends Controller
{
    public function index(){
        $user = Auth::id();
        $lead =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('status' ,'=' ,'Leads')->get();

        $applicationSent =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('status' ,'=' ,'Application Sent')->get();


        $interviewSet =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('status' ,'=' ,'Interview Set')->get();


        $offerReceived =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('status' ,'=' ,'Offer Received')->get();


        
        $closed =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('status' ,'=' ,'Closed')->get();
        return view('dashboard',['leads'=>$lead ,
                                'applicationsSent'=>$applicationSent,
                                'interviewsSet'=>$interviewSet,
                                'offersReceived'=>$offerReceived,
                                'closedleads'=>$closed] );
    }
    
    public function updateLeadStatusFromDetails(Request $req , $taskId){
        $user = Auth::id();
        $lead = DB::table('jobs')
                ->where('user_id', '=', $user)
                ->where('id', '=', $taskId)
                ->first();
        if ($lead) {
                    // Update the status of the lead
                    DB::table('jobs')
                        ->where('id',  $lead->id) // Assuming 'id' is the primary key column
                        ->update(['status' =>$req->input('status')]);
        } 
        return redirect()->back();
    }
    
    public function updateLeadStatus(Request $req , $taskId){
        $user = Auth::id();
        $lead = DB::table('jobs')
                ->where('user_id', '=', $user)
                ->where('id', '=', $taskId)
                ->first();
        if ($lead) {
                    // Update the status of the lead
                    DB::table('jobs')
                        ->where('id',  $lead->id) // Assuming 'id' is the primary key column
                        ->update(['status' =>$req->input('status')]);
        } 
        
        // dd($lead);
        return response()->json(['message' => 'Task status updated successfully'], 200);

    }
    
    public function quickAddLead(Request $req){
     
        $req->validate([
            'jobtitle' => 'required|string|max:255',
            'companyname' => 'required|string|max:255',
        ]);
  


    // If validation passes,
            // $lead = new Jobs();
            // $lead->job_title = $req->jobtitle;
            // $lead->company_name = $req->companyname;
            // $lead->status = "lead";
            // $lead->save();
        return response('this is from quck add');
            // return redirect(route('dashboard'));
    }


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

        $lead = new Jobs();
        $user = Auth::id();

        $findListingUrl = DB::table('jobs')
                ->where('user_id', '=', $user)
                ->where('listing_url', '=', $listingurl)
                ->first();
       
        if($findListingUrl){
            return redirect()->route('displaycreatenewleadform')->withInput()->withErrors(['listingurl' => 'The listing URL already exists.']);
    
        }else{
            $lead->user_id = $user;
            $lead->job_title= $jobtitle;
            $lead->listing_url= $listingurl;
            $lead->job_location= $joblocation;
            $lead->compensation= $compensation;
            $lead->contract_type= $contracttype;
            $lead->job_description= $jobdescription;

            $lead->company_name= $companyName;
            $lead->company_website= $companywebsite;
            $lead->company_summary= $companysummary;
            $lead->status = "Leads";
            $lead->save();

            return redirect(route('dashboard'));

            // dd($companyName,$companywebsite,$companysummary,$jobtitle,$listingurl,$joblocation,$compensation,$contracttype,$jobdescription);
        }
       
    }
}
