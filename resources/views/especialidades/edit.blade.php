@extends('home')

@section('content')

    <h1>Editar Especialidade</h1><br>

    <form action="{{ route('especialidade.update', ['especialidade' => $especialidade->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $especialidade->id }}">
       <p>
            <strong>Nome da especialidade</strong> <br> <input type="text" name="nome" value="{{ $especialidade->nome }}">
       </p>
       <p>
            <strong>Descrição da especialidade</strong> <br><textarea name="description" cols="70" rows="10">{{$especialidade->description}}</textarea>
       </p>
        <input type="submit" value="Atualizar">
    </form>

@endsection