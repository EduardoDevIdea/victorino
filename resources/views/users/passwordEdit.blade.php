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
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Senha</a>
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
                <input type="hidden" name="password" value="1">

                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" name="password">
                    </div> 
                </div>

                <input type="submit" value="Redefinir" class="btn btn-primary">

            </form>

        </div>
    </div>

@endsection