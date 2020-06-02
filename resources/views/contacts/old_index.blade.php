@extends('base_home')

@section('content')

    @if(session('store'))
        <script>
            window.alert("{{ session('store') }}");
        </script>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="container form-group">

            <!-- CONTATOS-->
            <h2>Contatos</h2>
            <div class="container ml-0 pt-2 pb-5" style="width: 80%;">
                <div class="row">
                    <div class="col">
                        <strong>Telefone 1</strong><br>
                        <input type="text" name="telefone1" class="form-control">
                    </div>
                    <div class="col">
                        <strong>Telefone 2</strong><br>
                        <input type="text" name="telefone2" class="form-control">
                    </div>
                    <div class="col">
                        <strong>WhatsApp</strong><br>
                        <input type="text" name="wpp" class="form-control">
                    </div>
                    <div class="col">
                        <strong>E-mail</strong><br>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
            </div>
            <!-- Fim CONTATOS -->

            <!-- MIDIAS SOCIAIS -->
            <h2>Mídias Sociais</h2>
            <div class="container ml-0 pt-2 pb-5" style="width: 80%;">
                <div class="row">    
                    <div class="col">
                        <i class="fab fa-facebook fa-2x"></i>
                        <input type="text" name="facebook" class="form-control" placeholder="link facebook">
                    </div>
                    <div class="col">
                        <i class="fab fa-instagram fa-2x"></i>
                        <input type="text" name="instagram" class="form-control" placeholder="link instagram">
                    </div>
                    <div class="col">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <input type="text" name="twitter" class="form-control" placeholder="link twitter">
                    </div>
                </div>
            </div>
            <!-- Fim MIDIAS SOCIAIS -->

            <!-- ENDERECO -->
            <h2>Endereço</h2>
            <div class="container ml-0 pt-2 pb-5" style="width: 80%;">
                <div class="row">
                    <div class="col">
                        <textarea name="endereco" cols="70" rows="2" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col pt-5 text-center">
                        <input type="submit" value="Atualizar dados" class="btn btn-success w-75">
                        <button type="submit">{1}</button>
                        id="finish"
                    </div>
                </div>
            </div>
            <!-- Fim ENDERECO -->

        </div>    
        
    </form>

@endsection