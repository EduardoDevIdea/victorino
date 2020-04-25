@extends('images.index')

@if(session('background'))
    <script>
        window.alert("{{ session('backgorund') }}");
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
            <h2><strong>Background</strong></h2>
        </div>
        
            @foreach($images as $image)

                <form action="{{ route('image.update', ['image' => $image->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="background" value="1">

                        <div class="row w-100 mb-4">
                            <div class="col">
                                <img src="/storage/{{ $image->path }}" style="width: 400px; height: 170;"> <br>
                                <strong>Alterar >>></strong> <input type="file" name="img">
                            </div>
                            <div class="col d-flex align-items-center">
                                <input type="submit" value="SALVAR">
                            </div>
                        </div>
                            
                </form>

            @endforeach
    </div>

@endsection