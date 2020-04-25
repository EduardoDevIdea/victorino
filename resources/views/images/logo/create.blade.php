@extends('images.index')

@section('form')

    @if(session('erroLogo'))
        <script>
            window.alert("{{ session('erroLogo') }}");
        </script>
    @endif

    <div class="container">

        <div class="row my-4">
            <h2>Logomarca</h2>
        </div>
        
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="logo" value="1">

            <div class="row my-4">
                <div class="col">
                    <strong>Imagem da Logomarca</strong> <input type="file" name="img">
                </div>
                <div class="col">
                    <strong>Img</strong><img src="" alt="">
                </div>
            </div>

            <div class="row my-5">
                <input type="submit" class="btn btn-success mx-auto" value="Atualizar" style="width: 50%;">
            </div>
        </form>

    </div>

@endsection