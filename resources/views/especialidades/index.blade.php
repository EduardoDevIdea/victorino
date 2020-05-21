@extends('base_home')

@section('content')

    @if(session('store'))
        <script>
            window.alert("{{ session('store') }}");
        </script>
    @endif

    @if(session('update'))
        <script>
            window.alert("{{ session('update') }}");
        </script>
    @endif

    <h1>Especialidades</h1><br>

    <a href="{{ route('especialidade.create') }}">
        <button class="btn btn-primary">Cadastrar Especialidade</button>
    </a>
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
                            <i class="fas fa-edit" style="color: black"></i> <!-- icone -->
                        </a>
                    </td>
                    <td>    
                        <a href="{{ route('especialidade.destroy', ['especialidade' => $especialidade->id]) }}" onclick="return confirm('Tem certeza que deseja excluir o registro?');">
                            <i class="fas fa-trash-alt" style="color: red"></i> <!-- icone -->
                        </a>
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

    <!-- Paginate -->
    <div class="container">
        {{ $especialidades->links() }}
    </div>

@endsection