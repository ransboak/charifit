<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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



    //SINGLE EVENT PAGE
    public function dashBlogsPage(){
        $user = Auth::user()->id;
        $blogs = Blog::where('author_id', $user)->get();
        return view('backend.pages.blog', compact('blogs'));
    }



    //FRONTEND
    //BLOG PAGE
    public function blogPage(){
        $blogs = DB::table('blogs')->latest()->paginate(2);
        foreach($blogs as $blog){
            $user = User::find($blog->author_id);
        }
        return view('frontend.pages.blog', compact('blogs', 'user'));
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
    public function singleBlogPage($id){
        $blog = Blog::find($id);
        return view('frontend.pages.blog-single', compact('blog'));
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
