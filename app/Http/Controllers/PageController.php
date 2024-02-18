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

    //DONATIONS PAGE
    public function donationsPage(){
        return view('frontend.pages.donations');
    }

    //SINGLE DONATION PAGE
    public function singleDonationPage(){
        return view('frontend.pages.donation-single');
    }

    //SINGLE BLOG PAGE
    public function singleBlogPage(){
        return view('frontend.pages.blog-single');
    }

    //PROJECTS PAGE
    public function projectsPage(){
        return view('frontend.pages.projects');
    }

    //SINGLE PROJECT PAGE
    public function singleProjectPage(){
        return view('frontend.pages.project-single');
    }

    //EVENTS PAGE
    public function eventsPage(){
        return view('frontend.pages.events');
    }
    //EVENTS PAGE
    public function missionPage(){
        return view('frontend.pages.mission');
    }
    //EVENTS PAGE
    public function teamPage(){
        return view('frontend.pages.team');
    }
    //EVENTS PAGE
    public function faqsPage(){
        return view('frontend.pages.faq');
    }

    //SINGLE EVENT PAGE
    public function singleEventPage(){
        return view('frontend.pages.event-single');
    }
}
