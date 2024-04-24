<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('frontend.index', compact('news'));

    }
    public function download()
    {
        return view('frontend.download');
    }

    public function academics()
    {
        return view('frontend.academics');
    }
    public function alumni()
    {
        return view('frontend.alumni');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function dropdown()
    {
        return view('frontend.dropdown');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function notice()
    {
        return view('frontend.notice');
    }
    public function privacy()
    {
        return view('frontend.privacy');
    }
    public function academicdetails()
    {
        return view('frontend.academicdetails');
    }

    public function images()
    {
        return view('frontend.images');
    }
    public function teams()
    {
        return view('frontend.teams');
    }
    public function terms()
    {
        return view('frontend.terms');
    }

    public function about(About $about)
    {
        $entries = About::where('status', 'published')->get();
        return view('frontend.about', compact('entries'));
    }

    public function news()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(6, ['*'], 'News');
        return view('frontend.news', compact('news'));
    }

    public function newsdetails( $id)
    {   $news = News::all();
        $news = News::findOrFail($id);
        return view('frontend.newsdetails',compact('news'));
    }
}


