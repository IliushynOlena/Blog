<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function about_us(){
        return view('pages.about_us');
    }
    public function course_grid_2(){
        return view('pages.course_grid_2');
    }
    public function course_grid_3(){
        return view('pages.course_grid_3');
    }
    public function course_grid_4(){
        return view('pages.course_grid_4');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function blog_single(){
        return view('pages.blog_single');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function pricing(){
        return view('pages.pricing');
    }
    public function teachers(){
        return view('pages.teachers');
    }
}
