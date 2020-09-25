<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MLController extends Controller
{
    //

    public function index()
    {
        $data = DB::table('data_dell')->get();
        return ($data);

//        $data = DB::table('purchase_history')->where('user_id', );
//        return auth()->user()->id;
    }
}
