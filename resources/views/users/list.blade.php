@extends('home')


@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@section('content')

    <h1>Ajustes<h1> <br>

    <div class="card text-center">
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.list') }}">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>

        <div class="card-body m-4" style="font-size: 15px">
            
            <!-- Lista de usuarios cadastrados -->

            <table class="table w-75">

                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('user.edit', ['user' => $user->id]) }}">
                                    <i class="fas fa-edit" style="color: black"></i> <!-- icone -->
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('user.destroy', ['user' => $user->id]) }}" onclick="return confirm('Tem certeza que deseja excluir o registro?');">
                                    <i class="fas fa-trash-alt" style="color: red"></i> <!-- icone -->
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>


@endsection