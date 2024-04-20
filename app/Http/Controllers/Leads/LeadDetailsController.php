<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
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




        return view('showleaddetails',['lead'=>$lead]);
    
    }
}
