@extends('base_home')
@section('title', 'Editar usuario')

@section('content')
<style>
     ul li a {
     color: black;
 }
</style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

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
                    <a class="nav-link" href="{{ route('user.list') }}" title="Listar usuários">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}" tabindex="-1" aria-disabled="true" title="Cadastrar usuário">
                        <i class="fas fa-user-plus"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" title="Editar usuário"><i class="far fa-edit"></i></a>
                </li>  
            </ul>
        </div>
        <!-- END CARD HEADER -->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">
            
            <h4 class="mb-4">EDITAR USUÁRIO</h4>

            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right" value="{{ $user->email }}">E-mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        <small class="form-text text-muted ml-1">
                            Para manter a senha anterior, deixe este campo em branco.
                        </small>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar senha</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">

                        <small class="form-text text-muted ml-1">
                            Repita a senha digitada acima, se optou por mudar a senha.
                        </small>
                    </div>
                </div>
                    
                <div class="row">
                    <label for="type" class="col-md-4 text-md-right">Admin</label>

                    <!-- Verificaca se user->type é master e deixa o campo marcado, caso seja -->
                    @if($user->type == "admin")
                        <input type="checkbox" id="type" name="type" value="1" checked style="width: 20px; height: 20px;">
                    @else
                        <input type="checkbox" id="type" name="type" value="1" style="width: 20px; height: 20px;">
                    @endif

                    <small class="form-text text-muted ml-1">
                        Permitir que o usuário cadastre e exclua outros usuários.
                    </small>
                </div>

                <div class="form-group row mt-4 mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Atualizar
                        </button>
                    </div>
                </div>

            </form>

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->


@endsection