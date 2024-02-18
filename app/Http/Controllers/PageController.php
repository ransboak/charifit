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
}
