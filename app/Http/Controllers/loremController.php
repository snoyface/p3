<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoremController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    public function generator($num) {
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($num);
        
        return view('lorem')->with('paragraphs', $paragraphs);
    }
}