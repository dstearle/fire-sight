<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    // About Page Controller
    public function about(){

        $title = 'About This Site';

        return view('pages.about')->with('title', $title);

    }

    // Settings Page Controller
    public function settings(){

        // Checks to see if user is a guest
        if(Auth::guest()) {

            // Redirects guest to signin page
            return view('auth.signin');

        }

        // If authenticated user, show them their settings page
        return view('pages.settings', array('user' => Auth::user()));

    }

    public function index(){

        $title = 'Welcome To Laravel';

        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);

    }

}
