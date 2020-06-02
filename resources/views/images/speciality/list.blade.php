@extends('images.index')


@section('form')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title">Imagens</h2>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Imagens</li>
                        <li class="breadcrumb-item active" aria-current="page">Especialidades</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
    <div class="container">

        <div class="row my-4">
            <h2><strong>Especialidade</strong></h2>
        </div>
        
            <div class="row mt-4">
                <div class="col">
                    <img src="/storage/{{ $image->path }}" style="width: 450px; height: 200px"> <br><br>
                </div>
            </div>

            <div class="row w-50 text-center">
                <div class="col">
                    <a href="{{ route('image.edit', ['image' => $image->id ]) }}"  class="btn btn-secondary" style="width: 25%;">
                        Atualizar
                    </a>
                </div>
            </div>
            
        </form>
    </div>

@endsection