<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoremController extends Controller {


    public function generator() {

        public function getCreate(){
        $num = $_GET['paragraphs'];
        };

        $generator = new \Badcow\LoremIpsum\Generator($num);
        $paragraphs = $generator->getParagraphs();
        
        //return view('lorem')->with('paragraphs', $paragraphs);
        return implode('<p>', $paragraphs);

    }
}