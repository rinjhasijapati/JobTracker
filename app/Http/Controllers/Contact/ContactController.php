<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function addContact(Request $req ,$jobId){
        $user = Auth::id();
        $contact_name = $req->contact_name;
        $contact_email = $req->contact_email;
        $job_title = $req->job_title;
        $linkedin_url = $req->linkedin_url;


        $findemail = DB::table('contacts')
                 ->where('user_id', '=', $user)
                ->where('job_id', '=', $jobId)
                // ->where('linkedin_url', '=', $linkedin_url)
                ->where('contact_email', '=', $contact_email)
                ->first();

                $findlinkedurl = DB::table('contacts')
                ->where('user_id', '=', $user)
                ->where('job_id', '=', $jobId)
                ->where('linkedin_url', '=', $linkedin_url)
                // ->where('contact_email', '=', $contact_email)
                ->first();
           
        if($findemail || $findlinkedurl){
            return redirect()->back()->withInput()->withErrors(['email' => 'The contact already exist']);
        }else{
            $person = new Contacts();
            $person->user_id = $user;
            $person->contact_name = $contact_name;
            $person->contact_email= $contact_email;
            $person->job_title= $job_title;
            $person->linkedin_url= $linkedin_url;
            $person->job_id= $jobId;

            $person->save();
            return redirect()->back();

          
        }
       
    }

    public function editContact(Request $req ,$jobId){
        $user = Auth::id();

        $contact_name = $req->contact_name;
        $contact_email = $req->contact_email;
        $job_title = $req->job_title;
        $linkedin_url = $req->linkedin_url;

        // dd($contact_name,$contact_email,$job_title,$linkedin_url);

        $findContact = DB::table('contacts')
        ->where('user_id', '=', $user)
        ->where('job_id', '=', $jobId)
        ->where('contact_email', '=', $contact_email)
        ->first();
        // dd($findContact->id);
        if($findContact){
            $data = Contacts::find($findContact->id);

            $data->contact_name = $contact_name;
            $data->contact_email= $contact_email;
            $data->job_title= $job_title;
            $data->linkedin_url= $linkedin_url;
            $data->job_id= $jobId;
            $data->user_id = $user;

            $data->update();
            return redirect()->back();
        }else{
            
            return redirect()->back();

        
        }
    }

    public function deleteContact($id){
        
        $user = Auth::id();

        $findContact = DB::table('contacts')
        ->where('user_id', '=', $user)
        ->where('id', '=', $id)
        ->first();

        if($findContact){
            $data = Contacts::find($id);
            $data->delete();

        }
      
        return redirect()->back();
    }
}
