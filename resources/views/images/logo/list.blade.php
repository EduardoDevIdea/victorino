@extends('images.index')
@section('title', 'Logo')

@section('form')

    <div class="container text-center">
        
        <h3 class="mb-4"><strong>Logomarca</strong></h2>
        
        <img src="/storage/{{ $image->path }}" style="width: 450px; height:150px;"> <br><br>

        @include('images.logo.edit') <!-- Modal para alterar imagem -->

        <!-- Botão dispara Modal -->
        <a href="{{ route('image.edit', ['image' => $image->id]) }}" class="btn btn-success" data-toggle="modal" data-target="#update" style="width: 30%;">
            Alterar
        </a>
        <!-- Fim Botão dispara Modal -->

        <br>

        <small><strong>Dê preferência a uma imagem que combine com o site</strong></small>

    </div>

@endsection