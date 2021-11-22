<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index(){
        $title = "Welcome to my Page";
        return view('pages.index') -> with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title'=> 'Services',
            'services' => ['Web Design', 'Programming', 'Analytics', 'SEO']
        );
        return view('pages.services')->with($data);
    }
    
}
