@extends('images.index')


@section('form')

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