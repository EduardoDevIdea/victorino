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

   <h1>Sobre nós</h1><br><br>

   <form action="{{ route('sobre.store') }}" method="POST" enctype="multipart/form-data"> 
      @csrf  
      <p>
         Filosofia<br><textarea name="filosofia"  cols="80" rows="5"></textarea>
      </p>
      <p>
         Funcionamento<br><textarea name="funcionamento" cols="80" rows="5"></textarea>
      </p>
      <p>
         Imagem<br><input type="file" id="img" name="img" value="Escolher Imagem">
      </p>
      <p>    
         Legenda da imagem<br><input type="text" name="legenda" value="">
      </p>

      <p><input type="submit" value="Inserir"></p>
   </form>
   <div class="card">
        <div class="card-body wizard-content">

            <strong><h3 class="card-title">Sobre nós</h3></strong>
            
            <h6 class="card-subtitle"></h6>

            <form id="example-form" action="{{ route('sobre.store') }}" method="POST" enctype="multipart/form-data" class="m-t-40">
                @csrf

                <div>
                    <section>
                
                        <label for="Filosofia"><strong>Filosofia *</strong></label>
                        <textarea id="Filosofia" name="filosofia" class="required form-control mb-4" cols="80" rows="5"></textarea>
                        
                        <label for="funcionamento"><strong>Funcionamento *</strong></label>
                        <textarea id="funcionamento" name="funcionamento" class="required form-control mb-4" cols="80" rows="5"></textarea>
                        
                        <br><input id="imagem" type="file" name="img" class="required">
                        <p><small style="color: red;">Altera a imagem que irá acompanhar o texto</small></p>
                         
                        <label for="legenda"><strong>Legenda da imagem *</strong></label>
                        <input  id="legenda" type="text" name="legenda" class="required">
                        
                        <p><input type="submit" value="Salvar" class="btn btn-primary"></p>

                    </section>
                </div>
            </form>
        </div>
    </div>


@endsection