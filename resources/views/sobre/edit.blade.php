@extends('home')

@section('content')

<form action="{{ route('sobre.update', ['sobre' => $sobre->id]) }}" method="POST"> 
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ old('sobre', $sobre->id) }}">

        <p>
            Filosofia<br><textarea name="filosofia" cols="80" rows="5">{{ $sobre->filosofia }}</textarea>
        </p>
        <p>
            Funcionamento<br><textarea name="funcionamento" cols="80" rows="5">{{ $sobre->funcionamento }}</textarea>
        </p>
        <p>
            Imagem<br><input type="file" name="img" value="Escolher Imagem">
        </p>
        <p>    
            Legenda da imagem<br><input type="text" name="legenda" value="{{ $sobre->legenda }}">
        </p>

        <p><input type="submit" value="Atualizar"></p>

    </form>

@endsection