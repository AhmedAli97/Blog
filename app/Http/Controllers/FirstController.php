<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function changeVowels($string) {
        $vowels = array('a','e','i','u','o');
        $chars_sentence = str_split($string);
        $i = 0;
        foreach ($chars_sentence as $char) {
            
                if (in_array($char, $vowels)) 
                {
                    $chars_sentence[$i] = strtoupper($char);
                }
                $i++;
        }
        $res = join("",$chars_sentence);
        return $res;
    }
    public function index() {
        $a = 5;
        $b = 6;
        $c = $a + $b;
        //$str = "you may win a prize if you guess it...!";
        //$final_str = changeVowels($str);
        //'sentence'=>$str,'edited_sent'=>$final_str
        return View('firstview', array('res'=>$c));
    }

   

}
