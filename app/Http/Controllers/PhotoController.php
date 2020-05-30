<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class PhotoController extends Controller
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

        $photos = Photo::all();
        $qtd = Photo::count(); //variavel guarda o numero de registros para exibir na view

        //dd($photos);

        return view('photos.index', compact('photos','qtd'));
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
        if($request->hasFile('img') && $request->img->isValid()){

            $imgPath = $request->img->store('photos');

            $photo = new Photo;

            $photo->path = $imgPath;

            $photo->save();

            return redirect()->action('PhotoController@index')->with('store', 'Foto armazenada com sucesso!');
        }
        else{
            return redirect()->back()->whith('erroImg', 'Erro ao carregar imagem!');
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
        dd($id);

        $photo = Photo::find($id);

        return view('photos.edit', compact('photo'));
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

        //dd($id);

        if($request->hasFile('img') && $request->img->isValid()){
            
            $photo = Photo::find($id);

            if($photo->path && Storage::exists($photo->path)){
                Storage::delete($photo->path);
            }

            $imgPath = $request->img->store('photos');

            $photo->path = $imgPath;

            $photo->save();

            return redirect()->action('PhotoController@index')->with('update', 'Imagem atualizada com sucesso!');
        }
        else{
            return redirect()->back()->with('erroImg', 'Erro ao carregar imagem!');
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
        $photo = Photo::find($id);

        if(Storage::exists($photo->path)){
            Storage::delete($photo->path);
        }

        $photo->delete();

        return redirect()->action('PhotoController@index')->with('delete', 'Foto excluída com sucesso!');
    }
}
