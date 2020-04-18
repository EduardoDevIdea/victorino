@extends('home')

@section('content')

    @if(session('update'))
      <script>
         window.alert("{{ session('update') }}");
      </script>
    @endif      

    <h1>Sobre nós</h1><br>

    <form action="{{ route('sobre.update', ['sobre' => $sobre->id]) }}" method="POST"> 
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $sobre->id }}" required>

        <p>
            <strong>Filosofia</strong><br><textarea name="filosofia" cols="80" rows="5">{{ $sobre->filosofia }}</textarea>
        </p>
        <p>
            <strong>Funcionamento</strong><br><textarea name="funcionamento" cols="80" rows="5" class="rounded">{{ $sobre->funcionamento }}</textarea>
        </p>
        <p>
            <img src="{{ env('APP_URL') }}/storage/{{ $sobre->img }}" alt="">
            <strong>Imagem</strong><br><input type="file" name="img" value="Escolher Imagem">
        </p>
        <p>    
            <strong>Legenda da imagem</strong><br><input type="text" name="legenda" value="{{ $sobre->legenda }}">
        </p>

        <p><input type="submit" value="Atualizar"></p>

    </form>

@endsection