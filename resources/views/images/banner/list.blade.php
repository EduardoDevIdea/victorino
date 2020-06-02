@extends('images.index')


@section('form')

    @include('images.banner.create') <!-- Modal para Adicinar imagem -->

    <div class="container">

        <div class="row my-4">
            <h2>Banner</h2>
        </div>
        
        <!-- Botão dispara Modal -->
        <button type="button" class="btn btn-secondary mb-4" data-toggle="modal" data-target="#create">
            Adicionar imagem
        </button>
        <!-- Fim Botão dispara Modal -->

        <div>
            @foreach($images as $image)
                <img src="/storage/{{ $image->path }}" class="m-1">
                <a href="{{ route('image.edit', ['image' => $image->id]) }}" class="btn btn-warning">
                    Editar
                </a>
                <a href="{{ route('image.destroy', ['image' => $image->id ]) }}" onclick="return confirm('Tem certeza que deseja excluir o banner?');">
                    Excluir
                </a>
                <hr>
            @endforeach
        </div>

        @if(count($images) === 0)
            <h3>Nenhuma imagem adicionada, até o momento.</h3>
        @endif

    </div>

@endsection