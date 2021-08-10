<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    // function getData()
    // {
    //     $users_data = User:: all(); 

    //     return view('users')->with('users_data', $users_data);
    // }

    function getDataFromAPI()
    {
        $users_data = Http::get("https://reqres.in/api/users?page=1");

        return view('users', ['users_data'=> $users_data['data']]);
    }
}
