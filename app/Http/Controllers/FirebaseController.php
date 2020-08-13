<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function index() 
    {
       /* $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/FirebaseKey.json')
        ->withDatabaseUri('https://blog-898bd.firebaseio.com/');*/
        $database = app('firebase.database');
        $ref = $database->getReference('User');
        $key = $ref->push()->getKey();
        $key = '4';
        $ref->getChild($key)->set([
            'id'=>'4',
            'fname'=>'Aly',
            'lname'=>'Mohamed',
            'age'=>'21'
        ]);
        return $key;
    }
}
