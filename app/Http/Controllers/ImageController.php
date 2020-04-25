<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('images.index');
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

                return redirect()->action('ImageController@show', ['id' => "logo"])
                       ->with('update', 'Imagem armazenada com sucesso!');           }
            else{
                return redirect()->back()->with('erroStore','Erro ao carregar imagem selecionada!');
            }
        }

        // BANNERS
        if($request->banner){
            
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
            if($request->hasFile('bkg3') && $request->bkg1->isValid()){
                $imgPath = $request->bkg3->store('images/background');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "bkg3";

                $image->save();

                $backgrounds++;
            }

            // Verifica se variavel $backgrounds foi incrementada
            if($backgrounds > 0){
                return redirect()->action('ImageController@show', ['id' => "background"])
                       ->with('update', 'Imagens armazenada com sucesso!');            }
            else{
                return redirect()->back()->with('erroStore', 'Erro ao carregar imagens selecionadas!');
            }
        }

        // ESPECIALIDADE PLANO DE FUNDO
        if($request->speciality){
            if($request->hasFile('img') && $request->img->isValid()){
                $imgPath = $request->img->store('images/speciality');

                $image = new Image;

                $image->path = $imgPath;
                $image->local = "speciality";

                $image->save();

                return redirect()->action('ImageController@show', ['id' => "speciality"])
                        ->with('update', 'Imagem armazenada com sucesso!');            }
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
    public function show($id) //Funcao responsavel por identificar qual o tipo da imagem e retornar sua respectiva view
    {                         // Se tiver nao existir retorna view create, se existir retorna view edit
        if($id == "logo"){

            $image = Image::where('local', 'logo')->first();

            if(blank($image)){
                return view('images.logo.create');
            }
            else{
                return view('images.logo.edit', compact('image'));
            }
        }
        
        if($id == "banner"){
            // Decidir como vai ser feito. Numero finito ou infinito de imagens
        }

        if($id == "background"){

            $images = Image::where('local', 'bkg1')
                        ->orWhere('local', 'bkg2')
                        ->orWhere('local', 'bkg3')
                        ->get();
            
            if(blank($images)){
                 return view('images.background.create');
            }
            else{
                return view('images.background.edit', compact('images'));
            }
        }

        if($id == "speciality"){

            $image = Image::where('local', 'speciality')->first();

            if(blank($image)){
                return view('images.speciality.create');
            }
            else{
                return view('images.speciality.edit', compact('image'));
            }
        }
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
        if($request->logo){

            if($request->hasFile('img') && $request->img->isValid()){

                $image = Image::find($id);

                if($image->path && Storage::exists($image->path)){
                    Storage::delete($image->path);
                }

                $imgPath = $request->img->store('images/logo');

                $image->path = $imgPath;

                $image->save();

                return redirect()->action('ImageController@show', ['id' => "logo"])
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

                return redirect()->action('ImageController@show', ['id' => "speciality"])
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

                return redirect()->action('ImageController@show', ['id' => "background"])
                ->with('update', 'Imagem atualizada com sucesso!');
            }
            else{
                redirect()->back()->with('erroUpdate', 'Erro ao carregar o arquivo!');
            }
        }

        if($request->banner){
            // Falta implementar o store de banner
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
        //
    }
}
