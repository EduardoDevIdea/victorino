<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobre;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sobre = Sobre::all()->first(); //Consulta todos os registros da tabela e retorna apenas um

        //dd($sobre);

        /* 
         * Se nao retornar nenhum registro, retorna para view que permite inserir novo registro
         * Senao, retorna para view com registro encontrado e permissao para edita-lo
        */
        if(blank($sobre)){
            return view('sobre.index');
        }
        else{ 
            return view('sobre.edit', compact('sobre'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sobre = new Sobre;

        $sobre->filosofia = $request->filosofia;
        $sobre->funcionamento = $request->funcionamento;
        $sobre->img = $request->img;
        $sobre->legenda = $request->legenda;

        $sobre->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sobre = Sobre::find($id);

        $sobre->filosofia = $request->filosofia;
        $sobre->funcionamento = $request->funcionamento;
        $sobre->img = $request->img;
        $sobre->legenda = $request->legenda;

        $sobre->save();

        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
