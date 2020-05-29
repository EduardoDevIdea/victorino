<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
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
        $user = Auth::user();
        $posts = Post::get();
        $profi = Profissional::get();
        
        // for ($count = 3; count($posts) > $count; $count++) {
        //     dd(count($posts));
        // }

        foreach ($posts as $post) {
            for ($count = 3; $post < $count; $count++) {
                return 'oi';
            }
        }

        return view('home', compact('user', 'posts', 'profi'));
    }

   
}
