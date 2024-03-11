<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    //
    public function addActivity(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'goal' => 'required',
            'thumbnail' => 'mimes:png,jpg,webp'
        ]);

        $thumbnail = time().'_1.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('uploads'), $thumbnail);

        $activity = Activity::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'thumbnail' => $thumbnail,
            'goal' => $request->goal,
            'current' => 0,
        ]);

        return $activity;

        if($activity){
            return redirect()->back()->with('success', 'Activity added successfully.');
        }else{
            return redirect()->back()->with('error', 'Failed to create Activity!');
        }
    }
}
