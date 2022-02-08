<?php

namespace App\Http\Controllers;

use App\About;
use App\Colaboration;
use App\Header;
use App\News;
use App\testimonials;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
//        $news = News::all()->sortByDesc('created_at');
        $news = News::orderBy('created_at','desc')->paginate(3);
        $colaboration = Colaboration::all();
        $testimonials = testimonials::all();
        $about = About::all()->first();
//        dd($about);
        $header = Header::all()->first();
        return view('welcome', [
            'news' => $news,
            'testimonials' => $testimonials,
            'colaboration' => $colaboration,
            'about' => $about,
            'header' => $header
        ]);
    }
}
