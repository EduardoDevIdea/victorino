<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
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
        return view('images.index');
    }

    // -- LIST -- Direciona para a view de acordo com o tipo de imagem (list se houver e Create se não houver)
    public function list($tipo){

        if($tipo == "logo"){

            $image = Image::where('local', 'logo')->first();

            if(blank($image)){
                return view('images.logo.create', compact('image')); //passando o registro nulo para fazer contagem = 0 e exibir mensagem na view create de que não existe imagem cadastrada
            }
            else{
                return view('images.logo.list', compact('image'));               
            }
        }
        
        if($tipo == "banner"){
            
            $images = Image::where('local', 'banner')->get();

            return view('images.banner.list', compact('images'));
        }

        if($tipo == "background"){

            $images = Image::where('local', 'bkg1')
                        ->orWhere('local', 'bkg2')
                        ->orWhere('local', 'bkg3')
                        ->get();

            if(blank($images)){
                return view('images.background.create');
            }
            else{
                return view('images.background.list', compact('images'));
            }
        }

        if($tipo == "speciality"){

            $image = Image::where('local', 'speciality')->first();

            if(blank($image)){
                return view('images.speciality.create');
            }
            else{
                return view('images.speciality.list', compact('image'));
            }
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
        // LOGOMARCA
        if($request->logo){

            if($request->hasFile('img') && $request->img->isValid()){

                $imgPath = $request->img->store('images/logo');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "logo";

                $image->save();

                return redirect()->action('ImageController@list', ['tipo' => "logo"])
                       ->with('store', 'Imagem armazenada com sucesso!');           }
            else{
                return redirect()->back()->with('erroStore','Erro ao carregar imagem selecionada!');
            }
        }

        // BANNERS
        if($request->banner){

            if($request->hasFile('img') && $request->img->isValid()){

                $imgPath = $request->img->store('images/banner');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "banner";

                $image->save();
                
                return redirect()->action('ImageController@list', ['tipo' => "banner"])
                        ->with('store', 'Imagem armazenada com sucesso!');
            }
            else{
                return redirect()->back()->with('erroStore', 'Erro ao carregar imagem selecionada!');       
            }
        }


        // BACKGROUNDS
        if($request->background){

            /* Em cada verificação e armazenamento de imagem a variavel $backgrounds recebe +1
            * Se ao final das três verificações $backgrounds for > 0 , uma mensagem de atualização sera configurada na session
            */
            $backgrounds = 0;

            // Backgorund 1
            if($request->hasFile('bkg1') && $request->bkg1->isValid()){

                $imgPath = $request->bkg1->store('images/background');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "bkg1";

                $image->save();

                $backgrounds++;
            }

            // Backgorud 2
            if($request->hasFile('bkg2') && $request->bkg2->isValid()){

                $imgPath = $request->bkg2->store('images/background');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "bkg2";

                $image->save();

                $backgrounds++;
            }

            // Background 3
            if($request->hasFile('bkg3') && $request->bkg3->isValid()){
                $imgPath = $request->bkg3->store('images/background');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "bkg3";

                $image->save();

                $backgrounds++;
            }

            // Verifica se variavel $backgrounds foi incrementada
            if($backgrounds > 0){
                return redirect()->action('ImageController@list', ['tipo' => "background"])
                       ->with('store', 'Imagens armazenadas com sucesso!');            }
            else{
                return redirect()->back()->with('erroStore', 'Erro ao carregar imagens selecionadas!');
            }
        }

        // ESPECIALIDADE - PLANO DE FUNDO
        if($request->speciality){

            if($request->hasFile('img') && $request->img->isValid()){

                $imgPath = $request->img->store('images/speciality');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "speciality";

                $image->save();

                return redirect()->action('ImageController@list', ['tipo' => "speciality"])
                        ->with('store', 'Imagem armazenada com sucesso!');
            }
            else{
                return redirect()->back()->with('erroStore', 'Erro ao carregar imagem selecionada!');
            }
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
    public function edit($id) //funcao recebe o nome do local da tabela image
    {
        $image = Image::find($id);

        //dd($image->local);

        if($image->local == "logo"){
            return view('images.logo.edit', compact('image'));
        }

        if($image->local == "banner"){
            return view('images.banner.edit', compact('image'));
        }

        if(($image->local == "bkg1") || ($image->local == "bkg2") || ($image->local == "bkg3") ){
            return view('images.background.edit', compact('image'));
        }

        if($image->local == "speciality"){
            return view('images.speciality.edit', compact('image'));
        }
        
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
        if($request->logo){

            if($request->hasFile('img') && $request->img->isValid()){

                $image = Image::find($id);

                if($image->path && Storage::exists($image->path)){
                    Storage::delete($image->path);
                }

                $imgPath = $request->img->store('images/logo');

                $image->path = $imgPath;

                $image->save();

                return redirect()->action('ImageController@list', ['tipo' => "logo"])
                       ->with('update', 'Imagem atualizada com sucesso!');
            }
            else {
                redirect()->back()->with('erroUpdate', 'Erro ao carregar o arquivo!');
            }
        }

        if($request->speciality){

            if($request->hasFile('img') && $request->img->isValid()){

                $image = Image::find($id);

                if($image->path && Storage::exists($image->path)){
                    Storage::delete($image->path);
                }

                $imgPath = $request->img->store('images/speciality');

                $image->path = $imgPath;

                $image->save();

                return redirect()->action('ImageController@list', ['tipo' => "speciality"])
                ->with('update', 'Imagem atualizada com sucesso!');
            }
            else{
                redirect()->back()->with('erroUpdate', 'Erro ao carregar o arquivo!');
            }
        }

        if($request->background){

            if($request->hasFile('img') && $request->img->isValid()){

                $image = Image::find($id);

                if($image->path && Storage::exists($image->path)){
                    Storage::delete($image->path);
                }

                $imgPath = $request->img->store('images/background');

                $image->path = $imgPath;

                $image->save();

                return redirect()->action('ImageController@list', ['tipo' => "background"])
                ->with('update', 'Imagem atualizada com sucesso!');
            }
            else{
                redirect()->back()->with('erroUpdate', 'Erro ao carregar o arquivo!');
            }
        }

        if($request->banner){

            if($request->hasFile('img') && $request->img->isValid()){
                
                $image = Image::find($id);

                if($image->path && storage::exists($image->path)){
                    storage::delete($image->path);
                }

                $imgPath = $request->img->store('images/banner');

                $image->path = $imgPath;

                $image->save();
                
                return redirect()->action('ImageController@list', ['tipo' => "banner"])
                       ->with('update', "Imagem atualizada com sucesso!");
            }
            else{
                return redirect()->back()->with('erroUpdate', 'Erro ao carregar o arquivo!');
            } 
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
        $image = Image::find($id);
        $tipo = $image->local;

        if(storage::exists($image->path)){

            storage::delete($image->path);
        }

        $image->delete();

        return redirect()->action('ImageController@list', ['tipo' => $tipo])
                   ->with('destroy', 'Imagem deletada com sucesso!');
    }
}
