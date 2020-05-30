<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
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
        $posts = Post::paginate(6); //Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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

            $imgPath = $request->img->store('posts');

            $post = new Post;

            $post->img = $imgPath;
            $post->titulo = $request->titulo;
            $post->subtitulo = $request->subtitulo;
            $post->texto = $request->texto;

            $post->save();

            return redirect()->action('PostController@index')->with('store', 'Publicação realizada com sucesso!');
        }
        else if($request->img == NULL){

            $post = new Post;

            $post->titulo = $request->titulo;
            $post->subtitulo = $request->subtitulo;
            $post->texto = $request->texto;

            $post->save();

            return redirect()->action('PostController@index')->with('store', 'Publicação realizada com sucesso!');
        }
        else{
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
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
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
        if($request->hasFile('img') && $request->img->isValid()){

            $post = Post::find($id);

            if($post->img && Storage::exists($post->img)){
                Storage::delete($post->img);
            }

            $imgPath = $request->img->store('posts');

            $post->img = $imgPath;
            $post->titulo = $request->titulo;
            $post->subtitulo = $request->subtitulo;
            $post->texto = $request->texto;

            $post->save();

            return redirect()->action('PostController@index')->with('update', 'Publicação atualizada com sucesso!');
        }
        else if($request->img == NULL){

            $post = Post::find($id);

            $post->titulo = $request->titulo;
            $post->subtitulo = $request->subtitulo;
            $post->texto = $request->texto;

            $post->save();

            return redirect()->action('PostController@index')->with('update', 'Publicação atualizada com sucesso!');
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
        $post = Post::find($id);

        $post = Post::find($id);

        if(Storage::exists($post->img)){

            Storage::delete($post->img);
        }

        $post->delete();

        return redirect()->action('PostController@index')->with('destroy', 'Publicação deletada com sucesso!');
    }
}
