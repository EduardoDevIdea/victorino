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
                    <a class="nav-link active" href="{{ route('user.index') }}">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="card-body m-4" style="font-size: 15px">
            
            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="profile" value="1">

                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" value="{{ $user->name }}">
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $user->email }}">
                    </div> 
                </div>

                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" name="password" minlenght="8" placeholder="Nova senha" title="Caso queira manter a senha anterior, não preencha este campo.">
                    </div> 
                </div>

                <input type="submit" value="Atualizar" class="btn btn-primary">

            </form>

        </div>
    </div>

@endsection