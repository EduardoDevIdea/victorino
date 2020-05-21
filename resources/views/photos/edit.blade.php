@extends('base_home')

@section('content')

    <div class="card" style="width: 550px;">

        <img src="/storage/{{ $photo->path }}" style="width: 500px; height: 350px;">

        <div class="card-header">
            <strong>Alterar foto</strong> 
        </div>

        <div class="card-body">
            <form action="{{ route('photo.update', ['photo' => $photo->id ]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <p class="card-text"><input type="file"name="img"></p>
                <input type="submit" value="Salvar" class="btn btn-primary">
                <a href="{{ route('photo.destroy', ['photo' => $photo->id]) }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir a foto?');">
                    Excluir
                </a>
                <a href="#">Voltar</a>
            
            </form>
        </div>

    </div>

@endsection

