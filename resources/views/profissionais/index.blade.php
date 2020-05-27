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

    @if(session('erroImg'))
      <script>
         window.alert("{{ session('erroImg') }}");
      </script>
    @endif

    @if(session('delete'))
      <script>
         window.alert("{{ session('delete') }}");
      </script>
    @endif      
 
    <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER-->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profissional.index') }}">Profissionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profissional.create') }}">Cadastrar</a>
                </li>      
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">
            
            <h3 class="mb-3"><strong>Profissionais cadastrados</strong></h3>

            <table class="table w-75 mx-auto">

                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Atividade</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($profissionais as $profissional)

                        <tr>

                            <td>{{ $profissional->nome }}</td>

                            <td>{{ $profissional->cargo }}</td>
                            
                            <td>{{ $profissional->atividade }}</td>

                            <td>
                                <button class="btn btn-link" data-toggle="tooltip" data-placement="bottom"  title="Editar">
                                    <a href="{{ route('profissional.edit', ['profissional' => $profissional->id]) }}"><i class="fas fa-edit" style="color: black"></i></a>
                                </button>

                                <button class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Excluir">
                                    <a href="{{ route('profissional.destroy', ['profissional' => $profissional->id]) }}" onclick="return confirm('Tem certeza que deseja excluir o registro?');" >
                                        <i class="fas fa-trash-alt" style="color: red"></i> <!-- icone -->
                                    </a>
                                </button>
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

            <!-- Paginate -->
            <div class="container">
            {{ $profissionais->links() }}
            </div>

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->

@endsection





