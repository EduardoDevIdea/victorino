<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profissional;

class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $profissionais = Profissional::all();

       return view('profissionais.index', compact('profissionais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profissionais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profissional = new Profissional;

        $profissional->nome = $request->nome;
        $profissional->cargo = $request->cargo;
        $profissional->atividade = $request->atividade;
        $profissional->registro = $request->registro;
        $profissional->sobre = $request->sobre;
        $profissional->img = $request->img;

        $profissional->save();

        /*
         * Apos cadastrar profissional, redireciona para metodo index do controlador
         * que consulta todos os registros e retorna uma view que listando todos
        */
        return redirect()->action('ProfissionalController@index');
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
        $profissional = Profissional::find($id);

        return view('profissionais.edit', compact('profissional'));
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
        $profissional = Profissional::find($id);

        $profissional->nome = $request->nome;
        $profissional->cargo = $request->cargo;
        $profissional->atividade = $request->atividade;
        $profissional->registro = $request->registro;
        $profissional->sobre = $request->sobre;
        $profissional->img = $request->img;

        $profissional->save();

        /*
         * Redireciona para metodo index que vai buscar todos os registros
         * e exibir uma view que vai lista-los
        */
        return redirect()->action('ProfissionalController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profissional = Profissional::find($id);

        $profissional->delete();

        /*
         * Redireciona para metodo index que vai buscar todos os registros
         * e exibir uma view que vai lista-los
        */
        return redirect()->action('ProfissionalController@index');

    }
}
