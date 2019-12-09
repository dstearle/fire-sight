<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // About Page Controller
    public function about(){

        $title = 'About This Site';

        return view('pages.about')->with('title', $title);

    }

    public function index(){

        $title = 'Welcome To Laravel';

        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);

    }

}
