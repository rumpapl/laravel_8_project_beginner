<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //
    public function index()
        {
        # code...
         $users_data = DB::select('select * from users');
         return view('users')->with('users_data',$users_data);
        }
}
