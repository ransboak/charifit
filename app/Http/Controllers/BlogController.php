<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //
    public function addBlog(Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'thumbnail' => 'mimes:png,jpg,webp'
        ]);

        $thumbnail = time().'_1.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('uploads'), $thumbnail);

        $blog = Blog::create([
            'title' => $request->title,
            'category' => $request->category,
            'body' => $request->body,
            'author_id' => Auth::user()->id,
            'video_link' => $request->video_link,
            'thumbnail' => $thumbnail,
        ]);

        if($blog){
            return redirect()->back()->with('success', 'Post added successfully.');
        }else{
            return redirect()->back()->with('error', 'Failed to create post!');
        }
    }
}
