@extends('home')

@section('content')

    <h1>Editar Especialidade</h1><br>

    <form action="{{ route('especialidade.update', ['especialidade' => $especialidade->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $especialidade->id }}">

       <p>
            <strong>Nome da especialidade</strong> <br>

            <input type="text" name="nome" value="{{ $especialidade->nome }}" class="form-control" required autofocus>

            @error('nome')
                <small class="form-text text-muted ml-1">
                    <span style="color:red;">
                        {{ $message }}
                    </span>
                </small>
            @enderror
       </p>

       <p>
            <strong>Descrição da especialidade</strong> <br><textarea name="description" cols="70" rows="10">{{$especialidade->description}}</textarea>
       </p>
        <input type="submit" value="Atualizar">
    </form>

@endsection