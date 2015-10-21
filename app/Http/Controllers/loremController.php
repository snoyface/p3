<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
//require_once '/path/to/Faker/src/autoload.php';




class loremController extends Controller {

//generator will create the paragraphs for Lorem and send to /Lorem to be displayed
    public function generator(Request $request) {
        $num = $request -> input('paragraphs');

        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($num);
        
        //return view('lorem')->with('paragraphs', $paragraphs);

        return View('lorem')->with('paragraphs',$paragraphs);

    }


//userGen creates the random users to be displayed in /Users
    public function userGen(Request $request) {
        $num = $request -> input('users');

        $faker = Faker\Factory::create();

        $fakeData = array();

        for($i = 0; $i < $num; $i++){
            array_push($fakeData, $faker->name);
        }

        return View('users') ->with('fakeData', $fakeData);

    }


};