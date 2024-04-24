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


        return view('showstatus', ['status' => $type,
                                    'leads' => $lead]);
       

    }
}
