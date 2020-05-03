<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade;
use Illuminate\Support\Facades\Session;

class EspecialidadeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidades = Especialidade::all(); //Consulta todos os registros da tabela especialidades

        /*
         * Se retornar nenhum registro retorna para view de cadastro de especialidade
         * Senao, retorna para view que lista todos os registros encontrados
        */
        if(blank($especialidades)){
            return view('especialidades.create');
        }
        else{
            return view('especialidades.index', compact('especialidades'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especialidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especialidade = new Especialidade;

        $especialidade->nome = $request->nome;
        $especialidade->description = $request->description;

        $especialidade->save();

        /*
         * Depois de inserir novo registro, redireciona para o metodo index do controlador
         * O metodo index do controlador vai buscar todos os registros e retornar para a view index
         * que vai listar todos eles.
        */
        return redirect()->route('especialidade.index')->with('store', 'Especialidade cadastrada com sucesso!');
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
        $especialidade = Especialidade::find($id);

        return view('especialidades.edit', compact('especialidade'));
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
        $especialidade = Especialidade::find($id);

        $especialidade->nome = $request->nome;
        $especialidade->description = $request->description;

        $especialidade->save();

        /*
         * Depois de atualizar registro, redireciona para rota especialidade.index com session de nome update e mensagem
         * O metodo index do controlador vai buscar todos os registros e retornar para a view index
         * que vai listar todos eles.
        */
        return redirect()->route('especialidade.index')->with('update', 'Especialidade atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $especialidade = Especialidade::find($id);

        $especialidade->delete();

        /*
         * Retorna para metodo index do controlador que vai buscar registtros e exibir numa view
        */
        return redirect()->action('EspecialidadeController@index');
    }
}
