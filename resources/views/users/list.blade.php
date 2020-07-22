@extends('base_home')

@section('title', 'Usuarios')

@section('content')
<style>
    ul li a {
    color: black;
    }
    @media only screen and (max-width: 320px) {
        .page-breadcrumb {
            display: none;
        }
        .table td,
        .table th {
            padding: 3px !important;
        }
        .m-4 {
            margin: 0 !important;
        }
        .card_body {
            padding: 10px 0 10px 0 !important;
        }
    }
    @media only screen and (max-width: 375px) {
        
        .table td,
        .table th {
            padding: 3px !important;
        }
        .m-4 {
            margin: 0 !important;
        }
        .card_body {
            padding: 10px 0 10px 0 !important;
        }
    }
</style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @if(session('store'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Usuário cadastrado com sucesso!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    @if(session('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Dados atualizados com sucesso',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Usuários</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Usuários</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="card text-center">
        <!-- CARD HEADER -->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
            
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.list') }}" title="Listar usuários">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}" tabindex="-1" aria-disabled="true" title="Cadastrar usuário">
                        Cadastrar
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

                                    <a  onclick="apagar({{$user->id}})" title="Excluir">
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

    <script>
        function apagar(id) {
            Swal.fire({
                title: "Deletar usuário?!",
                text: "Você não poderá reverter essa ação!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Cancelar",
                confirmButtonText: "Deletar"
            }).then(async (result) => {
                if (result.value) {
                    var url = "{{ url('/user') }}"
                    var  response = await fetch(url + `/${id}/delete`)
                    window.location.reload()
                    
                }
            })
           
        }
    </script>


@endsection