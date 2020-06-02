@extends('images.index')


@section('form')

    <div class="container text-center">

        <h2><strong>Background</strong></h2>
    
        <img src="/storage/{{ $image->path }}" style="width: 400px; height: 170;"> <br>
        
        @include('images.background.edit') <!-- Modal para alterar imagem -->

        <!-- Botão dispara Modal -->
            <a href="{{ route('image.edit', ['image' => $image->id]) }}" class="btn btn-success mt-2" data-toggle="modal" data-target="#update" style="width: 30%;">
                Alterar Imagem
            </a>
        <!-- Fim Botão dispara Modal -->

        <br>

        <small><strong>Dê preferência a uma imagem que combine com o site</strong></small>

    </div>

@endsection