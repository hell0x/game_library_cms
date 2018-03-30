<?php

namespace App\Http\Controllers;

use App\Login;

class LoginController extends Controller
{
    public function index()
    {
        $flights = Login::all();

        foreach ($flights as $flight) {
            echo $flight->username;
        }
    }

    public function dologin(){
        $data = json_decode(file_get_contents('php://input'), TRUE);

    }
}