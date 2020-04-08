@extends('home')

@section('content')

<form action="{{ route('sobre.store') }}" method="POST"> 
        @csrf  
        <p>
           Filosofia<br><textarea name="filosofia"  cols="80" rows="5"></textarea>
        </p>
        <p>
           <strong>Funcionamento</strong><br><textarea name="funcionamento" cols="80" rows="5"></textarea>
        </p>
        <p>
           Imagem<br><input type="file" name="img" value="Escolher Imagem">
        </p>
        <p>    
            Legenda da imagem<br><input type="text" name="legenda" value="">
        </p>

        <p><input type="submit" value="Inserir"></p>

    </form>

@endsection