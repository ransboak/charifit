<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        $user = Auth::user();

        If($user){
            $userrole = $user->role;

            if($userrole == 'admin'){
                return view('home');
            }elseif($userrole == 'user'){
                return view('dashboard');
            }
        }else{
            return redirect()->back();
        }
    }
}
