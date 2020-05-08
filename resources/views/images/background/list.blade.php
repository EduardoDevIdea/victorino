@extends('images.index')


@section('form')

    <div class="container">

        <div class="row my-4">
            <h2><strong>Background</strong></h2>
        </div>
        
        @foreach($images as $image)
            
            <div class="row w-100 mb-4">
                <div class="col">
                    <img src="/storage/{{ $image->path }}" style="width: 400px; height: 170;"> <br>
                </div>
                <div class="col d-flex align-items-center">
                    <a href="{{ route('image.edit', ['image' => $image->id ]) }}" class="btn btn-warning">
                        Alterar
                    </a>
                </div>
            </div>
                        
        @endforeach

    </div>

@endsection