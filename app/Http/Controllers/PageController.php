<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Login(Request $request)
    {
        return view('auth.login');
    }

    public function Daftar(Request $request)
    {
        return view('auth.daftar');
    }

    public function Home(Request $request)
    {
        return view('app.index');
    }

    public function Explore(Request $request)
    {
        return view('app.explore');
    }

    public function Post(Request $request)
    {
        return view('app.post');
    }

    public function Profile(Request $request, $username)
    {
        return view('app.profile', compact('username'));
    }

    public function Create(Request $request)
    {
        return view('app.create');
    }
}
