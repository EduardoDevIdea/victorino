<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Especialidade;
use App\Models\Image;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Profissional;
use Illuminate\Http\Request;
use App\Models\Sobre;

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
        $about = Sobre::all();
        $specialty = Especialidade::all();
        $doctor = Profissional::all();
        $contact = Contact::all();
        $space = Photo::all();
        $banner = Image::where('local', 'banner')->get();
        $post_principal = Post::get();

        return view('welcome', compact('about', 'specialty', 'doctor', 'contact', 'space', 'banner', 'post_principal') );
    }

    public function site()
    {
        $sobre_info = Sobre::get();
        return view('layouts.base', compact('sobre_info'));
    }
}
