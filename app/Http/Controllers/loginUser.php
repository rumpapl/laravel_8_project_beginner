<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginUser extends Controller
{
    //

    public function loginUserData(Request $req)
    {

        $req->validate([
            "UserName"=>'required',
            "UserPassword"=>'required'
        ]);
        return $req;
    }
}
