@extends('home')


@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@section('content')

    <h1>Ajustes<h1> <br>

    <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER-->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.index') }}">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.list') }}">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}" tabindex="-1" aria-disabled="true">Cadastro</a>
                </li>
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">

            <h4 class="mb-4">MEU PERFIL</h4>
            
            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                    <div class="col-md-6">
                        <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                    <div class="col-md-6">
                        <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" required autocomplete="email">

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

                <input type="submit" value="Atualizar" class="btn btn-primary">

            </form>

        </div>
        <!-- END CARD BODY -->

    </div>

@endsection