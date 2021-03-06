<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-.png')}}">
    <title>Victoriano Odontologia Especializada</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<style>
    #aparecer {
        color: white;
        top:0;
        left:0;
        z-index:10000;
        position: absolute;
        width: 40%;
        background-color: rgba(255, 187, 51, 0.8);
        padding: 20px;
        margin: 20px;
        font-size: 12pt;
        border-radius: 10px;
        animation: aparecer 2500ms;
    }
    .progress {
        top: 20px;
        background-color: rgba(213, 55, 11, 0.8);
        animation: progress 4400ms;
    }
    .aparecer {
        display: none;
    }

    @keyframes progress {
        0% { width: 100%; }
    
        100% { width: 0%;}
    }

   
</style>

@if(isset($errorMessageDuration))
<span id="aparecer">
    {{$errorMessageDuration}}<br>
    {{$finalizado}} <br>

    <div class="progress"></div>
</span>
@endif
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
    <div class="auth-box bg-dark  border-secondary" style="margin: 0; padding: 0">
        <div class="text-center p-t-20 p-b-20">
            <span class="db"><img src="{{asset('images/logo_remove_white.png')}}" alt="logo" /></span>
        </div>
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-4 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="row">
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-8">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-info" href="{{ route('password.request') }}" style="background:transparent; color:  black; border:none; top: 80px">
                                            {{ __('Esqueceu a senha?') }}
                                        </a>
                                    @endif

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>

        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
        $('#to-login').click(function(){
            
            $("#recoverform").hide();
            $("#loginform").fadeIn();
        });

        function notifica() {
             
            Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
            )
        }
    </script>
    <script>
        const span = document.getElementById('aparecer')

        window.setTimeout('aparecer()', 4000);

        function aparecer() {
            span.classList.add('aparecer');
        }


    </script>
</body>

</html>