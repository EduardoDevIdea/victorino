<style>
    .login {
        display: inline-flex;
        flex-direction: row;
        width: 100%;
        align-items: center;
        justify-content: center;
        justify-items: center;
        padding: 100px;
        box-shadow: 5px 10px rgba(179,179,179,.8);
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <div class="login container">
        <div class="col-6">
            <img src="{{asset('images/logo.png')}}" alt="" >
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input class="validate" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocusr>
                    <label for="email">Email</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                </div>
                

            <div class="input-field col s12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror validate" name="password" required autocomplete="current-password">
                <label for="password">Senha</label>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Esqueceu a senha?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
       
    </div>
