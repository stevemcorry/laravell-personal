<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){

        $tasks = [
            'Eat',
            'Go to the Gym',
            'Cry a Lot'
        ];
        
        return view('welcome', [
            'tasks' => $tasks
            ]);

    }


    public function about(){
        
        return view('about');

    }


    public function contact(){
        
        return view('contact');

    }

}
