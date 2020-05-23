<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * LOGOUT
     * Funcao criada como solução para direcionar usuario para tela de login após clicar em sair
     * A roda logout fornecida pela autenticação do laravel direciona para \home e eu não conseguir mudar
     * Por isso esta solução abaixo
     */
    public function logout(){
        Auth::logout(); //funcao de logout da facade Illuminate\Support\Facades\Auth; (Documentação de Validação)
        return view('auth.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); //Busca o user que está logado
        
        return view('users.profile', compact('user'));
    }

    public function list()
    {
        $users = User::paginate(5); // User::all()->paginate(5) - NÃO FUNCIONOU DESSE JEITO

        return view('users.list', compact('users'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * Se a validação falhar, nao segue com o restante do codigo da function store e redireciona para o form com mensagens de erro
        */ 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
        /**
         * Valor do campo type
         * Se o campo type for marcado no form, a instância recebe na tabela o valor "master", senao recebe "adm"
        */ 
        if($request->type == 1){
            $user->type = "admin";
        }
        else{
            $user->type = "editor";
        }

        $user->save();

        return redirect()->action('UserController@list')->with('store', 'Usuário cadastrado com sucesso!');
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
        $user = User::find($id);

        return view('users.edit', compact('user'));
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
        /**
         * Validação
         * Validando senha como nullable, pois o usuário pode deixar o campo em branco para manter a senha anterior
         * Se a validação falhar, nao segue com o restante do codigo da function store e redireciona para o form com mensagens de erro
        */ 
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::find($id);

        // Verifica se o campo de senha foi preenchido no form (pois pode ser mantido em branco para permanecer a senha anterior)
        if($request->password != NULL){ 

            $user->password = Hash::make($request->password);
        }
        
        // Verifica se o checkbox Master foi marcado, se foi type recebe "master", se não recebe "adm"
        if($request->type == 1){
            
            $user->type = "admin";
        }
        else{
            $user->type="editor";
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('home')->with('update', 'Dados atualizados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->action('UserController@list')->with('destroy', 'Usuário deletado com sucesso!');
    }
}
