@extends('base_home')

@section('content')

    @if(session('store'))
        <script>
            window.alert("{{ session('store') }}");
        </script>
    @endif

    @if(session('update'))
        <script>
            window.alert("{{ session('update') }}");
        </script>
    @endif

    <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER-->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('especialidade.index') }}">Especialidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('especialidade.create') }}">Cadastrar</a>
                </li>      
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">

            <h3 class="mb-3"><strong>Especialidades cadastradas</strong></h3>
            
            <table class="table w-50 mx-auto">

                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($especialidades as $especialidade)

                        <tr>
                            <td>{{ $especialidade->nome }}</td>

                            <td>
                                <button  class="btn btn-link" title="Editar"  data-toggle="tooltip" data-placement="bottom">
                                    <a href="{{ route('especialidade.edit', ['especialidade' => $especialidade->id]) }}"> <i class="fas fa-edit" style="color: black"></i></a> <!-- icone -->
                                </button>
                                
                                <button class="btn btn-link" type="button"data-toggle="tooltip" data-placement="bottom"  onclick="return confirm('Tem certeza que deseja excluir o registro?');" title="Excluir">
                                    <a href="{{ route('especialidade.destroy', ['especialidade' => $especialidade->id]) }}"><i class="fas fa-trash-alt" style="color: red"></i></a> <!-- icone -->
                                </button>
                            </td>
                        </tr>

                    @endforeach

                </tbody>

            </table>

            <!-- Paginate -->
            <div class="container">
                {{ $especialidades->links() }}
            </div>

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->
    
@endsection
