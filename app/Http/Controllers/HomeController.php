<?php

namespace App\Http\Controllers;

use App\Models\Sobre;
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
        $sobre_info = Sobre::get();
        return view('home');
    }

    public function site()
    {
        $sobre_info = Sobre::get();
        return view('layouts.base', compact('sobre_info'));
    }
}
