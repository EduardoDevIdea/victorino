<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Especialidade;
use App\Models\Photo;
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
        $about = Sobre::all();
        $specialty = Especialidade::all();
        $doctor = Profissional::all();
        $contact = Contact::all();
        $space = Photo::all();
        
        

        // dd(!$about == '');

        // if(!$about == '' || !$specialty == '' || !$doctor == '' || !$contact == ''){
        //     return view('layouts.notInformations');
        // };
        
        // dd($about[0]);
        
        return view('layouts.base' , compact('about', 'specialty', 'doctor', 'contact', 'space'));
    }
}
