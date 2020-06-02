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
        $bg_img = Image::where('local', 'bkg1')->get();
        $logo_inicio = Image::where('local','logo')->get();
        $about = Sobre::get();
        $especialidade = Especialidade::get();
        $espaco = Photo::get();
        $profi = Profissional::get();
        $contact = Contact::get();
        $post = Post::orderBy('created_at', 'desc')->get();


        if(count($bg_img) == 0 || count($about) == 0 || count($contact) == 0 || count($logo_inicio) == 0) {
            return view('Auth.Login', [
                'errorMessageDuration' => 'Faltam algumas informações no site',
                'finalizado' => 'Acesse o painel administrativo, para preencher as seções restantes' 
           ]);
        } else {
            return view('Site.index', compact('bg_img', 'about', 'especialidade', 'espaco','profi', 'contact', 'post', 'logo_inicio'));
        } 

    
}
}