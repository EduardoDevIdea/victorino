@extends('base_home')
@section('title', 'Especialidades')
@section('content')
<style>
    ul li a {
        color: black;
    }
</style>

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @if(session('store'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Especialidade cadastrada com sucesso!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    @if(session('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Dados atualizados com sucesso',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Especialidades</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Especialidades</li>
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
                    <a class="nav-link active" href="{{ route('especialidade.index') }}" title="Listar especialidades">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('especialidade.create') }}" title="Cadastrar especialidade">Cadastrar</a>
                </li>      
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">

            <h3 class="mb-3"><strong>Especialidades cadastradas</strong></h3>
            <div class="table-responsive">
                

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  id="especialidade" class="table  table-striped table-bordered">
                                <thead class="table-dark">
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
                                                <button  class="btn btn-info" title="Editar registro"  data-toggle="tooltip" data-placement="bottom">
                                                    <a href="{{ route('especialidade.edit', ['especialidade' => $especialidade->id]) }}" style="color: white"> Editar</a> <!-- icone -->
                                                </button>
                                                
                                                <button class="btn btn-danger" type="button"data-toggle="tooltip" data-placement="bottom" title="Apagar registro">
                                                    <a  onclick="apagar({{$especialidade->id}})" >
                                                        Apagar <!-- icone -->
                                                    </a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="table-dark">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
        </div>

            <!-- Paginate -->
            <div class="container">
                {{ $especialidades->links() }}
            </div>

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.j')}}s"></script>
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="a{{asset('ssets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        $('#especialidade').DataTable( {
            language: {
                "sSearch": "Buscar: ",
                "lengthMenu": "Mostrar _MENU_ resultados por página",
                "zeroRecords": "Nothing found - sorry",
                "info": "Página _PAGE_ de _PAGES_",
                "sZeroRecords": "Não foram encontrados resultados",
                "infoEmpty": "Nenhum resultado disponivel",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "oPaginate" : {
                    "sFirst": "Primeiro",
                    "sPrevious": "Anterior",
                    "sNext": "Próximo",
                    "sLast": "Último"
                },
                "sPaginateType": "full_number"
            },
         
               
                

        } );
    </script>
    <script>
        function apagar(id) {
            Swal.fire({
                title: "Deletar especialidade?!",
                text: "Você não poderá reverter essa ação!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Cancelar",
                confirmButtonText: "Deletar"
            }).then(async (result) => {
                if (result.value) {
                    var url = "{{ url('/especialidade') }}"
                    var  response = await fetch(url + `/${id}/delete`)
                    window.location.reload()
                }
            })
        }
    </script>


    
@endsection
