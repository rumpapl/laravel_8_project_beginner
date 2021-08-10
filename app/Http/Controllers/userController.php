<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function getData()
    {
        $users_data = User:: all(); 

        return view('users')->with('users_data', $users_data);
}
}
