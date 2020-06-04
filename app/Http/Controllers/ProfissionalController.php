<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profissional;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class ProfissionalController extends Controller
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
        $profissionais = Profissional::get(); //Profissional::all()->paginate(10); NÃO FUNCIONA DESSE JEITO
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
        //$tamanho = count($request->files);
        //dd($tamanho);

        if($request->hasFile('img') && $request->img->isValid()){

            $imgPath = $request->img->store('profissionais');

            $profissional = new Profissional;

            $profissional->img = $imgPath;
            $profissional->nome = $request->nome;
            $profissional->cargo = $request->cargo;
            $profissional->atividade = $request->atividade;
            $profissional->registro = $request->registro;
            $profissional->sobre = $request->sobre;

            $profissional->save();

            /*
            * Apos cadastrar profissional, redireciona para url que chama metodo index do controlador
            * que consulta todos os registros e retorna uma view listando todos
            * exibe mensagem flash da session de nome store
            */
            return redirect()->route('profissional.index')->with('store', 'Profissional cadastrado com sucesso!');
        }
        else if($request->img == NULL){ //Se não tiver imagem salva os outros campos com os valores informados pelo usuario

            $profissional = new Profissional;

            $profissional->nome = $request->nome;
            $profissional->cargo = $request->cargo;
            $profissional->atividade = $request->atividade;
            $profissional->registro = $request->registro;
            $profissional->sobre = $request->sobre;

            $profissional->save();

            return redirect()->route('profissional.index')->with('store', 'Profissional cadastrado com sucesso!');
        }
        else{ // se a imagem escolhida pelo usuario nao for valida, exibe mensagem de erro
            return redirect()->back()->with('erroImg', 'Erro ao carregar imagem!');
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
        if($request->hasFile('img') && $request->img->isValid()){ //Se houver imagem na requisicao e se imagem for valida

            $profissional = Profissional::find($id);

            if($profissional->img && Storage::exists($profissional->img)){ // se houver imagem na tabela e se houver mesma imagem na pasta storage
                Storage::delete($profissional->img); //exclui imagem para evitar falta de espaco de armazenamento
            }

            $imgPath = $request->img->store('profissionais'); //salva imagem na pasta profissionais e atribui o caminho na variavel

            $profissional->img = $imgPath;
            $profissional->nome = $request->nome;
            $profissional->cargo = $request->cargo;
            $profissional->atividade = $request->atividade;
            $profissional->registro = $request->registro;
            $profissional->sobre = $request->sobre;

            $profissional->save(); //salva todas as atribuicoes feitas

            return redirect()->route('profissional.index')->with('update', 'Registro atualizado com sucesso!');
        }
        else if($request->img == NULL){ //se nao houver imagem na requisicao de atualizacao, atualiza os outros campos

            $profissional = Profissional::find($id);

            $profissional->nome = $request->nome;
            $profissional->cargo = $request->cargo;
            $profissional->atividade = $request->atividade;
            $profissional->registro = $request->registro;
            $profissional->sobre = $request->sobre;

            $profissional->save();

            return redirect()->route('profissional.index')->with('update', 'Registro atualizado com sucesso!');
        }
        else{ //se entrar nessa condicao, foi a imagem nao era valida 
            return redirect()->back()->with('erroImg', 'Erro ao carregar imagem');
        }
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

        if($profissional->img && Storage::exists($profissional->img)){ //verifica se tem imagem na tabela e se mesma imagem existe na pasta storage
            Storage::delete($profissional->img); //exclui imagem da pasta storage para evitar falta de espaco de armazenamento futuro
        }

        $profissional->delete(); // Deleta registro do banco de dados

        /*
         * Redireciona para metodo index que vai buscar todos os registros
         * e exibir uma view que vai lista-los
        */
        return redirect()->route('profissional.index')->with('delete', 'Registro deletado com sucesso!');

    }
    
}
