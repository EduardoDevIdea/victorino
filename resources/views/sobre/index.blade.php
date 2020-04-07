@extends('home')

@section('content')

    <form action="#"> 
        @csrf 
        @method('PUT') 
        <p>
            Filosofia<br><textarea name="filosofia"  cols="80" rows="5"></textarea>
        </p>
        <p>
            Funcionamento<br><textarea name="funcionamento" cols="80" rows="5"></textarea>
        </p>
        <p>
            Imagem<br><input type="file" name="img" value="Escolher Imagem">
        </p>
        <p>
            Legenda da imagem<br><input type="text" name="legenda" value="">
        </p>

        <p><input type="submit" value="Atualizar"></p>

    </form>

@endsection