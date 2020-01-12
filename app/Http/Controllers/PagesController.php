<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to my Blog !';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About ';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Application Development', 'Data Sciecne', 'Machine Learning', 'Moblile Development', ' Artificial Intelligenece']
        );
        return view('pages.services')->with($data); 
    }

 

}
