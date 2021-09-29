<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(Request $request)
    {
        return view('pages.home');
    }

    public function watch(Request $request)
    {
        return view('pages.watch');
    }

    public function user(Request $request)
    {
        return view('pages.user');
    }

    public function videos(Request $request)
    {
        return view('pages.videos');
    }

    public function history(Request $request)
    {
        return view('pages.history');
    }

    public function likes(Request $request)
    {
        return view('pages.likes');
    }

    public function upload(Request $request)
    {
        return view('pages.upload');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function sign_up()
    {
    return view('pages.sign-up');
    }

    public function sign_in()
    {
        return view('pages.sign-in');
    }

}
