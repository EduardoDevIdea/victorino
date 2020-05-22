@extends('base_home')

@section('content')

    @if(session('erroImg'))
      <script>
         window.alert("{{ session('erroImg') }}");
      </script>
   @endif

    <h1><i class="fas fa-user-plus" style="font-size: 70px"></i><br> Cadastrar Profissional</h1><br>

    <form action="{{ route('profissional.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>
                        <strong>Nome</strong> <br>
                        <input type="text" name="nome" required>
                    </p>
                    <p>
                        <strong>Cargo</strong> <br>
                        <input type="text" name="cargo" required>
                    </p>
                    <p>
                        <strong>Atividade</strong> <br>
                        <input type="text" name="atividade">
                    </p>
                    <p>
                        <strong>Registro</strong> <br>
                        <input type="text" name="registro">
                    </p>
                    <p>
                        <strong>Foto</strong> <br>
                        <input type="file" name="img" value="Escolher Imagem" required>
                    </p> <br>

                    <input type="submit" class="btn btn-success" value="Cadastrar">
                </div>
                <div class="col">
                    <p>
                        <strong>Sobre</strong><br>
                        <textarea name="sobre" id="" cols="80" rows="10"></textarea>
                    </p>
                </div>
            </div>
        </div>

    </form>

@endsection