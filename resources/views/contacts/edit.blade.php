@extends('base_home')

@section('content')

    @if(session('update'))
        <script>
            window.alert("{{ session('update') }}");
        </script>
    @endif

    <form action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container">

            <!-- CONTATOS-->
            <h2>Contatos</h2>
            <div class="container ml-0 pt-2 pb-5" style="width: 80%;">
                <div class="row">
                    <div class="col">
                        <strong>Telefone 1</strong><br>
                        <input type="text" name="telefone1" class="form-control" value="{{ $contact->telefone1 }}">
                    </div>
                    <div class="col">
                        <strong>Telefone 2</strong><br>
                        <input type="text" name="telefone2" class="form-control" value="{{ $contact->telefone2 }}">
                    </div>
                    <div class="col">
                        <strong>WhatsApp</strong><br>
                        <input type="text" name="wpp" class="form-control" value="{{ $contact->wpp }}">
                    </div>
                    <div class="col">
                        <strong>E-mail</strong><br>
                        <input type="text" name="email" class="form-control" value="{{ $contact->email }}">
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
                        <input type="text" name="facebook" class="form-control" value="{{ $contact->facebook }}">
                    </div>
                    <div class="col">
                        <i class="fab fa-instagram fa-2x"></i>
                        <input type="text" name="instagram" class="form-control" value="{{ $contact->instagram }}">
                    </div>
                    <div class="col">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <input type="text" name="twitter" class="form-control" value="{{ $contact->twitter }}">
                    </div>
                </div>
            </div>
            <!-- Fim MIDIAS SOCIAIS -->

            <!-- ENDERECO -->
            <h2>Endereço</h2>
            <div class="container ml-0 pt-2 pb-5" style="width: 80%;">
                <div class="row">
                    <div class="col">
                        <textarea name="endereco" cols="70" rows="2" class="form-control">{{ $contact->endereco }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col pt-5 text-center">
                        <input type="submit" value="Atualizar dados" class="btn btn-success w-75">
                    </div>
                </div>
            </div>
            <!-- Fim ENDERECO -->

        </div>    
        
    </form>

@endsection