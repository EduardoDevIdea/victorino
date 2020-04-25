@extends('home')

@section('content')

    <div class="container">

        <h2 class="text-center">Atualize as imagens do site quando quiser.</h2>

        <div class="row w-auto mt-4 mb-5">

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.show', ['image' => 'logo']) }}">Logomarca</a> 
            </div>

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.show', ['image' => 'banner']) }}">Banner</a> 
            </div>

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.show', ['image' => 'background']) }}">Background</a> 
            </div>

            <div class="col d-flex justify-content-center">
                <a class="btn btn-primary w-75" href="{{ route('image.show', ['image' => 'speciality']) }}">Especialidade</a> 
            </div>

        </div>
        
        @yield('form')

    </div>

@endsection

