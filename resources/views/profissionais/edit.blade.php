@extends('home')

@section('content')

    <h1><i class="fas fa-user-plus" style="font-size: 70px"></i><br> Atualizar Profissional</h1><br>

    <form action="{{ route('profissional.update', ['profissional' => $profissional->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $profissional->id }}">

        <div class="container">
            <div class="row">
                <div class="col">
                    <p>
                        <strong>Nome</strong> <br>
                        <input type="text" name="nome"  value="{{ $profissional->nome }}" required>
                    </p>
                    <p>
                        <strong>Cargo</strong> <br>
                        <input type="text" name="cargo" value="{{ $profissional->cargo }}" required>
                    </p>
                    <p>
                        <strong>Atividade</strong> <br>
                        <input type="text" name="atividade" value="{{ $profissional->atividade }}">
                    </p>
                    <p>
                        <strong>Registro</strong> <br>
                        <input type="text" name="registro" value="{{ $profissional->registro }}">
                    </p>
                    <p>
                        <strong>Foto</strong> <br>
                        <input type="file" name="img" value="Escolher Imagem">
                    </p> <br>

                    <input type="submit" class="btn btn-success" value="Atualizar">
                </div>
                <div class="col">
                    <p>
                        <strong>Sobre</strong><br>
                        <textarea name="sobre" cols="80" rows="10">{{ $profissional->sobre }}</textarea>
                    </p>
                </div>
            </div>
        </div>

    </form>

@endsection