<?php

namespace App\Http\Controllers\Leads;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use PhpParser\Node\Expr\FuncCall;

class LeadCardController extends Controller
{
    public function showStatusCard($type){
        //read form the database
        $user = Auth::id();
        $lead =  DB::table('jobs')
        ->where('user_id', '=', $user)
        ->where('status' ,'=' ,$type)->get();

        $count = [];

        if ($lead) {
            foreach ($lead as $leadId) {
                $contactCount = DB::table('contacts')
                    ->where('user_id', '=', $user)
                    ->where('job_id', '=', $leadId->id)
                    ->count();
        
                $count[] = $contactCount;
            }
        } else {
            // If $lead is empty, you might want to set a default value for $count
             $count = [];
        }
     

        return view('showstatus', ['status' => $type,
                                    'leads' => $lead,
                                     'count' => $count]);
       

    }
}
