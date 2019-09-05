<?php

namespace BlogPostsApp\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Blog Posts App";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    // public function services(){
    //     $data = array(
    //         'title' => 'Services from array',
    //         'services' => ['Web Design', 'Programing', 'SEO']
    //     );
    //     return view('pages.services')->with($data);
    // }
}
