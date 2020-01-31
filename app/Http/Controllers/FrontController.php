<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $post = Berita::orderBy('created_at', 'DESC')->take(2)->get();
        
        return view('pages.front.index', compact('post'));
    }

    public function singleBlog($slug)
    {
        $latest = Berita::orderBy('created_at', 'DESC')->take(4)->get();
        $post = Berita::where('slug', '=', $slug)->first();
        
        $prev = Berita::where('id', '<', $post->id)->orderBy('id', 'DESC')->first();
        
        $next = Berita::where('id', '>', $post->id)->orderBy('id')->first();

        $countComment = $post->comments()->count();
        
        return view('pages.front.single-blog', compact(['post', 'latest', 'prev', 'next', 'countComment']));
    }
}
