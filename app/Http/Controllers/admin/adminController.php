<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

     public function about()
    {
        return view('admin.about.about');
    }
    public function publish()
    {
        return view('admin.about.publish');
    }
    public function edit()
    {
        return view('admin.about.edit');
    }
    public function news()
    {
        return view('admin.news.news');
    }
    public function newspublish()
    {
        return view('admin.news.publish');
    }
    public function newsedit()
    {
        return view('admin.news.edit');
    }
    public function profile()
    {
        return view('admin.profile');
    }

    public function users()
    {
        return view('admin.users.users');
    }
    public function adduser()
    {
        return view('admin.users.adduser');
    }
}


