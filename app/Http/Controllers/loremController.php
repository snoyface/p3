<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

 public function getCreate(){
        $num = $_GET['paragraphs'];
        };

class loremController extends Controller {


    public function generator() {

        $generator = new \Badcow\LoremIpsum\Generator($num);
        $paragraphs = $generator->getParagraphs();
        
        //return view('lorem')->with('paragraphs', $paragraphs);
        return implode('<p>', $paragraphs);

    }

    public function userGen() {

    };
}