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

    // Dashboard Page Controller
    public function dashboard(){

        $title = 'Dashboard';

        return view('pages.dashboard')->with('title', $title);

    }
}
