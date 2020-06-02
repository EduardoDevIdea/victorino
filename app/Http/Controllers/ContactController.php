<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
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

        $contact = Contact::all()->first(); // Busca todos os registros e retorna o primeiro encontrado

        /*
        * Se nao encontrar nenhum registro, retorna view index que permite inserir
        * Senao, retorna view edit que permite editar registro encontrado
        */
        if(blank($contact)){
            return view('contacts.index2');
        }
        else{
            return view('contacts.edit', compact('contact'));
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
        $contact = new Contact;

        $contact->telefone1 = $request->telefone1;
        $contact->telefone2 = $request->telefone2;
        $contact->wpp = $request->wpp;
        $contact->email = $request->email;
        $contact->facebook = $request->facebook;
        $contact->instagram = $request->instagram;
        $contact->twitter = $request->twitter;
        $contact->endereco = $request->endereco;

        $contact->save();

        /*
        * Apos salvar registro, redireciona para rota index com session de nome store e mensagem
        * O metodo index do controlador vai buscar o registro e retornar uma view exibindo ele e permitindo
        * edita-lo
        */
        return redirect()->route('contact.index')->with('store', 'Dados registrados com sucesso!');
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
        $contact = Contact::find($id);

        $contact->telefone1 = $request->telefone1;
        $contact->telefone2 = $request->telefone2;
        $contact->wpp = $request->wpp;
        $contact->email = $request->email;
        $contact->facebook = $request->facebook;
        $contact->instagram = $request->instagram;
        $contact->twitter = $request->twitter;
        $contact->endereco = $request->endereco;

        $contact->save();

       /*
        * Apos atualizar registro, redireciona para rota index com session de nome update e mensagem
        * O metodo index do controlador vai buscar o registro e retornar uma view exibindo ele e permitindo
        * edita-lo
        */
        return redirect()->route('contact.index')->with('update', 'Dados atualizados com sucesso!');
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
