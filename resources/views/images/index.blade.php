@extends('base_home')

@if(session('store'))
    <script>
        window.alert("{{ session('store') }}");
    </script>
@endif

@if(session('erroStore'))
    <script>
        window.alert("{{ session('erroStore') }}");
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

@if(session('destroy'))
    <script>
        window.alert("{{ session('destroy') }}");
    </script>
@endif


@section('content')

    <div class="container">

        <h2 class="text-center">Atualize as imagens do site quando quiser.</h2>

        <div class="row w-auto mt-4 mb-5">

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.list', ['image' => 'logo']) }}">Logomarca</a> 
            </div>

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.list', ['image' => 'banner']) }}">Banner</a> 
            </div>

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.list', ['image' => 'background']) }}">Background</a> 
            </div>

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.list', ['image' => 'speciality']) }}">Especialidade</a> 
            </div>

        </div>
        
        @yield('form')

    </div>

@endsection

