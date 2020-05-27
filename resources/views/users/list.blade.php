@extends('base_home')


@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@if(session('store'))
    <script>
        window.alert("{{ session('store') }}");
    </script>
@endif

@section('content')

    <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER -->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
            
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.list') }}" title="Listar usuários">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}" tabindex="-1" aria-disabled="true" title="Cadastrar usuário">
                        <i class="fas fa-user-plus"></i>
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- END CARD HEADER -->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">
            
            <h4 class="mb-4">USUÁRIOS CADASTRADOS</h4>

            <table class="table w-75 mx-auto">

                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                             <!-- Se o registro é o do user que está autenticado, não aparece opções para editar e excluir -->
                            @if($user->id == Auth::id())
                                <td>
                                    <a href="{{ route('user.index') }}">
                                        <i class="fas fa-user fa-lg" title="Meu perfil"></i> <!-- icone direciona para o seu perfil -->
                                    </a>
                                </td>
                                
                             <!-- Se user for master, nao pode ser editado, nem excluido -->    
                            @elseif($user->type == "master") 
                                <td>
                                    <a href="#">
                                        <i class="fas fa-user-shield fa-lg" style="color:black" title="Master"></i> <!-- icone -->
                                    </a>
                                </td>
                                    <!-- Manter o <td> vazio para formataçao da tabela -->
                                <td>
                            @else
                                <td>
                                    <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="mr-3" title="Editar">
                                        <i class="fas fa-edit" style="color: black"></i> <!-- icone -->
                                    </a>
                               
                                    <a href="{{ route('user.destroy', ['user' => $user->id]) }}" onclick="return confirm('Tem certeza que deseja excluir o registro?');" title="Excluir">
                                        <i class="fas fa-trash-alt" style="color: red"></i> <!-- icone -->
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>

            </table>

            <!-- Paginação -->
            <div class="container w-75">
                <div class="row">
                    {{ $users->links() }}
                </div>  
            </div>

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->


@endsection