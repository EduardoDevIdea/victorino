@extends('base_home')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        @if(session('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Dados atualizados com sucesso',
                showConfirmButton: false,
                timer: 2500,
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

        <p>
            <strong>Filosofia</strong><br><textarea name="filosofia" cols="80" rows="5">{{ $sobre->filosofia }}</textarea>
        </p>
        <p>
            <strong>Funcionamento</strong><br><textarea name="funcionamento" cols="80" rows="5" class="rounded">{{ $sobre->funcionamento }}</textarea>
        </p>
        <p>
            <strong>Imagem atual</strong> <br>
            <img src="storage/{{ $sobre->img }}" style="width: 200px; height:200px"> <br>
            <br><input type="file" name="img">
        </p>
        <p>    
            <strong>Legenda da imagem</strong><br><input type="text" name="legenda" value="{{ $sobre->legenda }}">
        </p>

        <p><input type="submit" value="Atualizar"></p>

    </form>

@endsection
