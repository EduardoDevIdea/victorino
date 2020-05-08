@extends('images.index')


@section('form')

    <div class="container">

        <div class="row my-4">
            <h2>Logomarca</h2>
        </div>
        
        <img src="/storage/{{ $image->path }}" style="width: 450px; height:150px;"> <br><br>
        <a href="{{ route('image.edit', ['image' => $image->id]) }}" class="btn btn-warning">
            Editar
        </a>

    </div>

@endsection