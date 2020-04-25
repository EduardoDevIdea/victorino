@extends('images.index')


@if(session('erroLogo'))
    <script>
        window.alert("{{ session('erroLogo') }}");
    </script>
@endif

@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@if(session('erroUpdate'))
    <script>
        window.alert("{{ session('erroUpdate') }}");
    </script>
@endif


@section('form')

    <div class="container">

        <div class="row my-4">
            <h2>Logomarca</h2>
        </div>
        
        <form action="{{ route('image.update', ['image' => $image->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="logo" value="1">

            <div class="row my-4 w-50">

                <div class="col">
                    <img src="/storage/{{ $image->path }}" style="width: 450px; height:150px;"> <br><br>
                    <strong>Alterar >>> </strong> <input type="file" name="img"> <br><br><br>
                </div>

                <input type="submit" class="btn btn-success mx-auto" value="Atualizar" style="width: 40%">
            </div>

        </form>

    </div>

@endsection