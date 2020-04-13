@extends('home')

@section('content')

 
    <h1>Profissionais</h1> <br>

    <a href="{{ route('profissional.create') }}">
        <button class="btn btn-primary">Cadastrar Profissional</button>
    </a> <br><br>

    <table class="table w-75">

        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Atividade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>

        <tbody>

            @foreach($profissionais as $profissional)

                <tr>
                    <td>{{ $profissional->nome }}</td>

                    <td>{{ $profissional->cargo }}</td>
                    
                    <td>{{ $profissional->atividade }}</td>

                    <td>
                        <a href="{{ route('profissional.edit', ['profissional' => $profissional->id]) }}">
                            <i class="fas fa-edit" style="color: black"></i> <!-- icone -->
                        </a>
                    </td>

                    <td>
                    <a href="{{ route('profissional.destroy', ['profissional' => $profissional->id]) }}" onclick="return confirm('Tem certeza que deseja excluir o registro?');">
                            <i class="fas fa-trash-alt" style="color: red"></i> <!-- icone -->
                        </a>
                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

@endsection