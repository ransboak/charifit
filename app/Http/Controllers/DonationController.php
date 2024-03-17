<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    //
    public function donate(Request $request){
        $request->validate([
            'activity' => 'required|integer',
            'contact' => 'required',
            'currency' => 'required',
            'amount' => 'required|gt:0'
        ],[
            'amount.gt' => "Amount should be greater than 0"
        ]);

        $name1 = $request->firstname;
        $name2 = $request->lastname;

        if(!$name1 && !$name2){
            $name = "Anonymous";
        }else{
            $name = $request->firstname . " " . $request->lastname;
        }

        if(!Auth::user()){
            $user_id = 0;
        }else{
            $user_id = Auth::user()->id;
        }
        $activity_id = $request->activity;
        $activity = Activity::find($activity_id);
        $activity_goal = $activity->goal;
        $activity_current = $activity->current;
        $new_current = $activity_current + $request->amount;


        $donation = Donation::create([
            'donor' => $name,
            'email' => $request->email,
            'contact' => $request->contact,
            'user_id' => $user_id,
            'activity_id' => $request->activity,
            'currency' => $request->currency,
            'amount' => $request->amount,
            'remarks' => $request->remarks,
            'payment_method' => $request->payment_method,
        ]);


        if($donation){
            $activity->update(['current' => $new_current]);
            return redirect()->back()->with('success', 'Donation successful.');
        }else{
            return redirect()->back()->with('error', 'Donation was unsuccessful.');
        }
    }
}
