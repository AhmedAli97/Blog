<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        //print_r($request->input());
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        DB::insert('insert into users(id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);
    }

    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $data = DB::select('select id from users where name=? and password=?',[$name,$password]);
        
        if (count($data))
        {
            echo "Welcome to your dashboard...!";
        }
        else 
        {
            echo "Incorrect username or password";
        }
    }
}
