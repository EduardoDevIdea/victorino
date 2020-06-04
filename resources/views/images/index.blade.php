@extends('base_home')
@section('title', 'Imagens')

@section('content')


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @if(session('store'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Imagem cadastrada com sucesso!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    @if(session('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Imagem atualizada com sucesso!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif


    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Imagens</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Imagens</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <h3 class="text-center mt-4">Atualize as imagens do site quando quiser.</h3>

        <div class="row w-auto mt-4 mb-5">

            <div class="col d-flex justify-content-center">
                <a class="btn btn btn-info w-75" href="{{ route('image.list', ['image' => 'logo']) }}">Logomarca</a> 
            </div>

            <div class="col d-flex justify-content-center">
                <a class="btn btn btn-info w-75" href="{{ route('image.list', ['image' => 'background']) }}">Background</a> 
            </div>

        </div>
        
        @yield('form')

    </div>

@endsection

