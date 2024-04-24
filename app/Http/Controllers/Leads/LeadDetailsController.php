<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeadDetailsController extends Controller
{
    //
    public function getLeadDetails($id){
        $user = Auth::id();
        $lead =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('id' ,'=' ,$id)->first();

        
         $contact = DB::table('contacts')
                ->where('job_id', '=', $id)->get();
                
                // dd($contact[1]);
        return view('showleaddetails',['lead'=>$lead,
                                        'contacts'=>$contact]);
    
    }

    public function showEditLeadDetailsForm($id){
        $user = Auth::id();
        $lead =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('id' ,'=' ,$id)->first();

        return view('editLead',['lead'=>$lead]);
    }   

    public function updateLeadDetails(Request $req , $id){
        $user = Auth::id();
        $data = Jobs::find($id);

        $findListingUrl = DB::table('jobs')
                ->where('user_id', '=', $user)
                ->where('company_name', '=', $req-> companyname)
                ->where('job_title', '=', $req-> jobtitle)

                ->where('listing_url', '=', $req-> listingurl)
                ->first();

        if($findListingUrl){
            return redirect()->route('lead.showeditdetailsform',['id'=>$id])->withInput()->withErrors(['listingurl' => 'The listing URL already exists.']);
        }else{
              // $data->user_id = $user;
            $data->job_title= $req->jobtitle;
            $data->listing_url=$req-> listingurl;
            $data->job_location= $req->joblocation;
            $data->compensation= $req->compensation;
            $data->contract_type= $req->contracttype;
            $data->job_description= $req->jobdescription;

            $data->company_name= $req->companyname;
            $data->company_website= $req->companywebsite;
            $data->company_summary= $req->companysummary;


        
            $data->update();

            // $lead =  DB::table('jobs')
            // ->where('user_id', '=', $user)
            // ->where('id' ,'=' ,$id)->first();
            return redirect(route('lead.showdetails',['id'=>$id]));
        }

       
        
    }
}
