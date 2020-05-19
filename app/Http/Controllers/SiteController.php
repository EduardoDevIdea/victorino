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

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Image::where('local', 'banner')->get();
        $bg_img = Image::where('local', 'bkg1')->get();
        $about = Sobre::get();
        $especialidade = Especialidade::get();
        $espaco = Photo::get();
        $profi = Profissional::get();
        $contact = Contact::get();
        $post = Post::get();


        // dd($bg_img);

       

        return view('Site.index', compact('banner', 'bg_img', 'about', 'especialidade', 'espaco','profi', 'contact', 'post'));
    }
}
