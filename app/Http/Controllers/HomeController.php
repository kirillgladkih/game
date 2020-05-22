<?php

namespace App\Http\Controllers;

use App\Highscores;
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
        $csrf = csrf_token();

        $data = Highscores::all()->sortByDesc('score');

        return view('home', compact('data','csrf'));
    }
}
