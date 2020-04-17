<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
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
        
        // dd($about[0]);
        
        return view('layouts.base' , compact('about', 'specialty'));
    }
}
