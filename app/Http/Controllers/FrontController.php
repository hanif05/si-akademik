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
}
