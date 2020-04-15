<?php

namespace App\Http\Controllers;

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
        // dd($about[0]);
        
        return view('layouts.base' , compact('about'));
    }
}
