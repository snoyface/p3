<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;



class loremController extends Controller {

    public function getCreate(){
        $num = $_GET['paragraphs'];
        };

    public function generator() {

        $generator = new \Badcow\LoremIpsum\Generator($num);
        $paragraphs = $generator->getParagraphs();
        
        //return view('lorem')->with('paragraphs', $paragraphs);
        implode('<p>', $paragraphs);

        return view('result')->with('paragraphs',$paragraphs);

    };



    public function userGen() {

    };
};