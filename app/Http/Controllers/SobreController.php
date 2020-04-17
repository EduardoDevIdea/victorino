<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobre;
use Illuminate\Support\Facades\Session;

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

        /*
        * Apos salvar novo registro, redireciona para rota que chama metodo index do controller
        * Com session de nome store e mensagem  
        * O metodo index busca os registros e retorna view com o primeiro, possibilitando edita-lo
        */
        return redirect()->route('sobre.index')->with('store', 'Dados atualizados com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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

        /*
        * Apos atualizar registro, redireciona para rota que chama metodo index do controller
        * Com session de nome stupdate e mensagem  
        * O metodo index busca os registros e retorna view com o primeiro, possibilitando edita-lo
        */
        return redirect()->route('sobre.index')->with('update', 'Dados atualizados com sucesso!');
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
