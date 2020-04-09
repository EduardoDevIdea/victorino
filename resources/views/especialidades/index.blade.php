@extends('home')

@section('content')

    <h1>Especialidades</h1><br>

    <a href="{{ route('especialidade.create') }}"><button class="btn btn-primary">Cadastrar Especialidade</button></a>
    <br><br>

    <table class="table w-50">

        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>

        <tbody>

            @foreach($especialidades as $especialidade)

                <tr>
                    <td>{{ $especialidade->nome }}</td>

                    <td>
                        <a href="{{ route('especialidade.edit', ['especialidade' => $especialidade->id]) }}">
                            <i class="fas fa-edit" style="color: black"></i>
                        </a>
                    </td>
                    <td>    
                        <a href="">
                            <i class="fas fa-times" style="color: red"></i>
                        </a>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

@endsection