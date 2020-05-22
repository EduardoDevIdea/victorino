<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user(); //Busca o user que está logado (precisa para fazer verificação se vai exibir ou não item Usuarios no menu)

        $especialidades = Especialidade::paginate(5); // Especialidade::all()->paginate(5); NÃO FUNCIONA DESSE JEITO

        /*
         * Se retornar nenhum registro retorna para view de cadastro de especialidade
         * Senao, retorna para view que lista todos os registros encontrados
        */
        if(blank($especialidades)){
            return view('especialidades.create', 'user');
        }
        else{
            return view('especialidades.index', compact('especialidades', 'user'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); //Busca o user que está logado (precisa para fazer verificação se vai exibir ou não item Usuarios no menu)

        return view('especialidades.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nome' => ['required', 'string','max:255', 'unique:especialidades'],
            'description' => ['required','string', 'max:100000' ],
        ]);

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
        $user = Auth::user(); //Busca o user que está logado (precisa para fazer verificação se vai exibir ou não item Usuarios no menu)

        $especialidade = Especialidade::find($id);

        return view('especialidades.edit', compact('especialidade', 'user'));
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
        $request->validate([
            'nome' => ['required', 'string','max:255'],
            'description' => ['required','string', 'max:100000' ],
        ]);

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
