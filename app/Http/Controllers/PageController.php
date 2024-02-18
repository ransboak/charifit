<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //DASHBOARD
    public function index(){
        $user = Auth::user();

        If($user){
            return view('backend.pages.index');
        }else{
            return redirect()->back();
        }
    }

    //BLOG PAGE
    public function blogPage(){
        return view('frontend.pages.blog');
    }

    //ABOUT US PAGE
    public function aboutPage(){
        return view('frontend.pages.about');
    }

    //SINGLE DONATION PAGE
    public function singleDonationPage(){
        return view('frontend.pages.donation-single');
    }
}
