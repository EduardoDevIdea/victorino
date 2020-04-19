@extends('home')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @if(session('update'))
      <script>
         Swal.fire({
            icon: 'success',
            title: 'Imagem salva com sucesso',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            onBeforeOpen: () => {
                Swal.showLoading()
            }
        })
   
      </script>
    @endif      

    <h1>Sobre nós</h1><br>

    <form action="{{ route('sobre.update', ['sobre' => $sobre->id]) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')

        <input type="hidden" name="id" value="{{ $sobre->id }}" required>

        <p>
            <strong>Filosofia</strong><br><textarea name="filosofia" cols="80" rows="5">{{ $sobre->filosofia }}</textarea>
        </p>
        <p>
            <strong>Funcionamento</strong><br><textarea name="funcionamento" cols="80" rows="5" class="rounded">{{ $sobre->funcionamento }}</textarea>
        </p>
        <div>
            <img src="{{asset($sobre->img)}}" alt="" width="100%" height="auto">
        </div>
        <p>
<<<<<<< HEAD
            <strong>Imagem</strong><br><input type="file" name="img" id="img" value="Escolher Imagem">
=======
            <img src="{{asset($sobre->img) }}" alt="" >
            <strong>Imagem</strong><br><input type="file" name="img" value="Escolher Imagem">
>>>>>>> 7d5cdde5e4d707f2774479e6aef972d8f6be3476
        </p>
        <p>    
            <strong>Legenda da imagem</strong><br><input type="text" name="legenda" value="{{ $sobre->legenda }}">
        </p>

        <p><input type="submit" value="Atualizar"></p>

    </form>
   

@endsection