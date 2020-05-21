@extends('base_home')

@section('content')

    <h1>Cadastrar Especialidade</h1><br>

    <form action="{{ route('especialidade.store') }}" method="POST">
        @csrf
       <p>
            <strong>Nome da especialidade</strong> <br> <input type="text" name="nome" value="{{ old('nome') }}" required autofocus>

            @error('nome')
                <small class="form-text text-muted ml-1">
                    <span style="color:red;">
                        {{ $message }}
                    </span>
                </small>
            @enderror
       </p>

       <p>
            <strong>Descrição da especialidade</strong> <br><textarea name="description" cols="70" rows="10"></textarea>

            @error('description')
                <small class="form-text text-muted ml-1">
                    <span style="color:red;">
                        {{ $message }}
                    </span>
                </small>
            @enderror
       </p>

        <input type="submit" value="Cadastrar" class="btn btn-success">
    
    </form>

@endsection