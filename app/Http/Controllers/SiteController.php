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


        if(count($bg_img) == 0 && count($about) == 0 && count($logo_inicio) == 0) {
            return view('auth.login', [
                'errorMessageDuration' => 'As imagens de background,  logo do menu e a seção quem somos precisam ser preenchidas',
                'finalizado' => 'Acesse o painel administrativo, para preencher as seções restantes'
           ]);
        } else if(count($bg_img) == 0 && count($about) == 0) {
            return view('auth.login', [
                'errorMessageDuration' => 'As imagens de background e a seção Quem Somos precisam ser preenchidas',
                'finalizado' => 'Acesse o painel administrativo, para preencher as seções restantes' 
           ]);
        }
        else if(count($bg_img) == 0 && count($logo_inicio)  == 0) {
            return view('auth.login', [
                'errorMessageDuration' => 'As imagens de background e a logo do menu precisam ser inseridas',
                'finalizado' => 'Acesse o painel administrativo, para preencher as seções restantes' 
           ]);
        }
        else if(count($bg_img) == 0) {
            return view('auth.login', [
                'errorMessageDuration' => 'Falta inserir uma imagem para o background',
                'finalizado' => 'Acesse o painel administrativo, para preencher as seções restantes' 
           ]);
        }
        else if(count($about) == 0) {
            return view('auth.login', [
                'errorMessageDuration' => 'Falta preencher a a seção Quem Somos',
                'finalizado' => 'Acesse o painel administrativo, para preencher as seções restantes' 
           ]);
        }
        else if(count($logo_inicio) == 0) {
            return view('Auth.login', [
                'errorMessageDuration' => 'Falta acrescentar uma imagem para a logo do menu',
                'finalizado' => 'Acesse o painel administrativo, para preencher as seções restantes' 
           ]);
        }
        else {
            return view('Site.index', compact('bg_img', 'about', 'especialidade', 'espaco','profi', 'contact', 'post', 'logo_inicio'));
        } 

    
}
}