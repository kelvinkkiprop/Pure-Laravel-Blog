<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $users = User::count();
        $posts = Post::count();

        return view('dashboard')->with([
            'users' => $users,
            'posts' => $posts,
        ]);
    }


}
