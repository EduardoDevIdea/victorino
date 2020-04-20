@extends('home')

@section('content')

    @if(session('update'))
      <script>
         window.alert("{{ session('update') }}");
      </script>
    @endif      

    <h1>Sobre nós</h1><br>

    <form action="{{ route('sobre.update', ['sobre' => $sobre->id]) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

        <p>
            <strong>Filosofia</strong><br><textarea name="filosofia" cols="80" rows="5">{{ $sobre->filosofia }}</textarea>
        </p>
        <p>
            <strong>Funcionamento</strong><br><textarea name="funcionamento" cols="80" rows="5" class="rounded">{{ $sobre->funcionamento }}</textarea>
        </p>
        <p>
            <strong>Imagem atual</strong> <br>
            <img src="storage/{{ $sobre->img }}" alt=""> <br>
            <br><input type="file" name="img">
        </p>
        <p>    
            <strong>Legenda da imagem</strong><br><input type="text" name="legenda" value="{{ $sobre->legenda }}">
        </p>

        <p><input type="submit" value="Atualizar"></p>

    </form>

@endsection
