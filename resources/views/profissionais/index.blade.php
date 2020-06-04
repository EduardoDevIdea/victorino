@extends('base_home')
@section('title', 'Profissionais')
@section('content')
<style>
    ul li a {
        color: black;
    }
</style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @if(session('store'))
        <script>
            Swal.fire({
            icon: 'success',
            title: "{{ session('store') }}",
            showConfirmButton: false,
            })
        </script>
    @endif

    @if(session('update'))
      <script>
          Swal.fire({
            icon: 'success',
            title: "{{ session('update') }}",
            showConfirmButton: false,
            })
      </script>
    @endif

    @if(session('erroImg'))
      <script>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('erroImg') }}",
            })
      </script>
    @endif

    @if(session('delete'))
      <script>
          Swal.fire(
            'Deletado!',
            "{{ session('delete') }}",
            'success'
            )
         window.alert("{{ session('delete') }}");
      </script>
    @endif      
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Profissionais</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Profissionais</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER-->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profissional.index') }}" title="Listar profissionais">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profissional.create') }}" title="Cadastrar profissional">Cadastrar</a>
                </li>      
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">
            
            <h3 class="mb-3"><strong>Profissionais cadastrados</strong></h3>

            <table class="table w-100 mx-auto">

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
                                    <a  onclick="apagar({{$profissional->id}})" >
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

    <script>
        function apagar(id) {
            Swal.fire({
                title: "Deletar Profissional ?!",
                text: "Você não poderá reverter essa ação!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Cancelar",
                confirmButtonText: "Deletar"
            }).then(async (result) => {
                if (result.value) {
                    var url = "{{ url('/profissional') }}"
                    var  response = await fetch(url + `/${id}/delete`)
                    window.location.reload()
                    
                }
            })
           
        }
    </script>

@endsection





