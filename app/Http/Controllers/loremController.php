<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;




class loremController extends Controller {

/*
    public function getCreate(){
        $num = $_GET['paragraphs'];
        }
*/
    public function generator(Request $request) {
        $num = $request -> input('paragraphs');

        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($num);
        
        //return view('lorem')->with('paragraphs', $paragraphs);
        implode('<p>', $paragraphs);

        return view('lorem')->with('paragraphs',$paragraphs);

    }



    public function userGen() {

    }
};