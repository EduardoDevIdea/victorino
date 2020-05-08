@extends('images.index')

@section('form')

    <div class="card pt-4" style="width: 500px;">

            <img src="/storage/{{ $image->path }}" class="mx-auto" style="width: 450px; height: 150px;">

            <div class="card-header">
                <strong>Alterar Logomarca</strong> 
            </div>

            <div class="card-body">
                <form action="{{ route('image.update', ['image' => $image->id ]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden"  name="logo" value="1">
                    
                    <p class="card-text">
                        <input type="file" name="img">
                    </p>

                    <input type="submit" value="Salvar" class="btn btn-primary">
                    
                    <a href="#">Voltar</a>
                </form>
            </div>
    </div>

@endsection
