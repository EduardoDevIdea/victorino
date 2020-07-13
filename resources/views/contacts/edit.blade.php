@extends('base_home')
@section('title', 'Formas de contato')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@if(session('update'))
<script>
    Swal.fire({
        icon: 'success',
        title: '{{ session('update') }}',
        showConfirmButton: false,
        timer: 5000     
    })
</script>
@endif
    <link href="assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
        <div class="container">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h2 class="page-title">Contatos</h2>
                        <br>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contato</li>
                                    <li class="breadcrumb-item active" aria-current="page">Editar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card">
                    <div class="card-body wizard-content">
                        <form id="example-form" action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="POST" class="m-t-40">
                            @csrf
                            @method('PUT')
                            <div>
                                <h3>Contatos</h3>
                                <section>
                                    <label for="telefone1">Telefone </label>
                                    <input id="telefone1" name="telefone1" type="text" class="form-control" value="{{$contact->telefone1}}" maxlength="14" onkeyup="mascara_tel(this, mtel)">
                                    <label for="wpp">Whatsapp</label>
                                    <input id="wpp" name="wpp" type="text" class="form-control" value="{{$contact->wpp}}" maxlength="15" onkeyup="mascara_wpp(this, mtel)">
                                    <label for="email">E-mail</label>
                                    <input id="email" name="email" type="text" class="form-control" value="{{$contact->email}}">
                                </section>
                                <h3>Midias Sociais</h3>
                                <section>
                                    <label for="instagram">Instagram</label>
                                    <input id="instagram" name="instagram" type="text" class="form-control" value="{{$contact->instagram}}">
                                    <label for="facebook">Facebook</label>
                                    <input id="facebook" name="facebook" type="text" class="form-control" value="{{$contact->facebook}}">
                                    <label for="twitter">Twitter</label>
                                    <input id="twitter" name="twitter" type="text" class="form-control"  value="{{$contact->twitter}}">
                                </section>
                                <h3>Endereço</h3>
                                <section>
                                    <label for="endereco">Endereço da clinica</label>
                                    <input id="endereco" name="endereco" type="text" class="form-control" value="{{$contact->endereco}}">
                                </section>
                                <h3>Finalizando</h3>
                                <section class="text-center">
                                    <h3>Agora com todas as informações alteradas...</h3>
                                    <button class="btn btn-success" type="submit">
                                        Atualize os seus dados
                                    </button>
                                </section>
                            </div>
                        </form>
                      
                    </div>
                </div>
            </div>
        </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    
    <script>
        /* Máscaras ER */
        function mascara_tel(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

        function mascara_wpp(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function mtel(v){
            v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
            v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

    </script>
    <script>
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            document.getElementById("finish").classList.add('sumir')
            
            form.validate().settings.ignore = ":disabled";

            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });
    </script>

    
</body>

</html>

@endsection