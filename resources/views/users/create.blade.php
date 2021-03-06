@extends('base_home')

@section('title', 'Cadastrar Usuario')
@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@section('content')
<style>
     ul li a {
     color: black;
 }
</style>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Usuários</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('user.list') }}">Usuários</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- CARD -->
    <div class="card  mx-auto text-center">
        <!-- CARD HEADER -->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.list') }}" title="Listar usuários">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.create') }}" tabindex="-1" aria-disabled="true" title="Cadastrar usuário">
                       Cadastrar
                    </a>
                </li>

            </ul>
        </div>
        <!-- END OF CARD HEADER -->

        <!--CARD BODY -->
        <div class="card-body my-4" style="font-size: 15px">
            
                <h4 class="mb-4">CADASTRO DE USUÁRIO</h4>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    
                    <div class="row">
                        <label for="type" class="col-md-4 text-md-right">Admin</label>

                        <input type="checkbox" id="type" name="type" value="1" style="width: 20px; height: 20px;">

                        <small class="form-text text-muted ml-1">
                            Permitir que o usuário cadastre e exclua outros usuários.
                        </small>

                    </div>

                    <div class="form-group row mt-4 mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                Cadastrar
                            </button>
                        </div>
                    </div>

                </form>
            
        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->
    
@endsection
