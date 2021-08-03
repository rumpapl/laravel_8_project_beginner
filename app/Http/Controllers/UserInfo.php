<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfo extends Controller
{
    //
    public function info()
    {
        $data = [
            "name"=>"John Doe",
            "age" => "23"

        ];
        return view('dataFromController', ["data"=>$data]);
    }
}
