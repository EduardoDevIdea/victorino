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
        if($request->hasFile('img') && $request->img->isValid()){ // verificacao se arquivo esta presente e se nao ouve problema ao faze upload

            $imgPath = $request->img->store('sobre'); //salva imagem no caminho padrao, dentro da pasta nova pasta 'sobre' e cria nome ficticio para imagem
                                                      // Atribui caminho onde imagem foi salva na variavel $imgPath

            $sobre = new Sobre;

            $sobre->img = $imgPath; // atriubui caminho onde a imagem esta salva no objeto $sobre->img

            $sobre->filosofia = $request->filosofia;
            $sobre->funcionamento = $request->funcionamento;
            $sobre->legenda = $request->legenda;

            $sobre->save();

            /*
            * Apos salvar fazer verificação de imagem e salvar novo registro, redireciona para rota que
            * chama metodo index do controller com session de nome store e mensagem
            * O metodo index busca os registros e retorna view com o primeiro, possibilitando edita-lo
            */
            return redirect()->route('sobre.index')->with('update', 'Dados inseridos com sucesso!');
        }
        else{
            return redirect()->back()->with('erroImg', 'Erro!!!. Por favor, verifique se a imagem é válida.');
        }
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
