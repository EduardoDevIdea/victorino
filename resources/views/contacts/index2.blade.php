@extends('base_home')

@section('content')
<style>
    .sumir {
        display: none;
    }
</style>
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
                                    <li class="breadcrumb-item active" aria-current="page">Criar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card">
                    <div class="card-body wizard-content">
                        <form id="example-form" action="{{ route('contact.store') }}" method="POST" class="m-t-40">
                            @csrf
                            <div>
                                <h3>Contatos</h3>
                                <section>
                                    <label for="telefone1">Telefone </label>
                                    <input id="telefone1" name="telefone1" type="text" class="required form-control">
                                    <label for="wpp">Whatsapp</label>
                                    <input id="wpp" name="wpp" type="text" class="required form-control">
                                    <label for="email">E-mail</label>
                                    <input id="email" name="email" type="text" class="required form-control">
                                </section>
                                <h3>Midias Sociais</h3>
                                <section>
                                    <label for="instagram">Instagram</label>
                                    <input id="instagram" name="instagram" type="text" class="required form-control">
                                    <label for="facebook">Facebook</label>
                                    <input id="facebook" name="facebook" type="text" class="required form-control">
                                    <label for="twitter">Twitter</label>
                                    <input id="twitter" name="twitter" type="text" class="required form-control">
                                </section>
                                <h3>Endereço</h3>
                                <section>
                                    <label for="endereco">Endereço da clinica</label>
                                    <input id="endereco" name="endereco" type="text" class="required form-control">
                                </section>
                                <h3>Finalizando</h3>
                                <section class="text-center">
                                    <h3>Agora com todas as informações preenchidas...</h3>
                                    <button class="btn btn-success" type="submit">
                                        Salvez os seus dados
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