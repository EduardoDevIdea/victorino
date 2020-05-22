@extends('base_home')

@section('content')

   @if(session('store'))
        <script>
            window.alert("{{ session('store') }}");
        </script>
   @endif

   @if(session('erroImg'))
        <script>
            window.alert("{{ session('erroImg') }}");
        </script>
   @endif  
   <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title">Sobre Nós</h2>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Sobre</li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<br>

   <div class="card">
        <div class="card-body wizard-content">

            
            <h6 class="card-subtitle"></h6>

            <form id="example-form" action="{{ route('sobre.store') }}" method="POST" enctype="multipart/form-data" class="m-t-40">
                @csrf

                <div>
                    <section>

                        <div class="row">
                            <div class="col-6">

                                <label for="legenda"><strong>Sobre a clinica *</strong></label>
                                <textarea  id="legenda" name="legenda" class="required form-control mb-4"></textarea>
                                <br>
                                <label for="Filosofia"><strong>Filosofia *</strong></label>
                                <textarea id="Filosofia" name="filosofia" class="required form-control mb-4" cols="80" rows="5"></textarea>
                                <br>
                                <label for="funcionamento"><strong>Funcionamento *</strong></label>
                                <textarea id="funcionamento" name="funcionamento" class="required form-control mb-4" cols="80" rows="5"></textarea>
                                <br>
                            </div>
                            <div class="col-6">
                                <br><input id="imagem" type="file" name="img" class="required">
                                <p><small style="color: red;">Altera a imagem que irá acompanhar o texto</small></p>
                            </div>
                        </div>
                    </section>
                    <p><input type="submit" value="Salvar" class="btn btn-primary"></p>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'funcionamento', {
            uiColor: '#9AB8F3',
        });
        CKEDITOR.replace( 'filosofia', {
            uiColor: '#9AB8F3',
        });
        CKEDITOR.replace( 'legenda', {
            uiColor: '#9AB8F3',
        });
    </script>
@endsection