@extends('home')

@section('content')

    <h1>Cadastrar Especialidade</h1><br>

    <form action="{{ route('especialidade.store') }}" method="POST">
        @csrf
       <p>
            <strong>Nome da especialidade</strong> <br> <input type="text" name="nome" required>
       </p>

       <p>
            <strong>Descrição da especialidade</strong> <br><textarea name="description" cols="70" rows="10"></textarea>
       </p>

        <input type="submit" value="Cadastrar" class="btn btn-success">
    
    </form>

@endsection