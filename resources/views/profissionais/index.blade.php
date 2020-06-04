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
            timer: 1500
            })
        </script>
    @endif

    @if(session('update'))
      <script>
          Swal.fire({
            icon: 'success',
            title: "{{ session('update') }}",
            showConfirmButton: false,
            timer: 1500
            })
      </script>
    @endif

    @if(session('erroImg'))
      <script>
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('erroImg') }}",
            timer: 1500
            })
      </script>
    @endif

    {{-- @if(session('delete'))
      <script>
        
      </script>
    @endif       --}}
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

            <table id="profissionais" class="table w-100 mx-auto">

                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Atividade</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($profissionais as $profissional)

                        <tr>
                            <td>
                                <img src="{{asset('storage/'.$profissional->img)}}" alt="" width="50px">
                            </td>
                            <td style="display: inline-flex; justify-content:center;align-items:center">
                                <p style="justify-content:center">{{ $profissional->nome }}</p>
                            </td>

                            <td>{{ $profissional->cargo }}</td>
                            
                            <td>{{ $profissional->atividade }}</td>

                            <td>
                                <button class="btn btn-info" data-toggle="tooltip" data-placement="bottom"  title="Editar Profissional">
                                    <a href="{{ route('profissional.edit', ['profissional' => $profissional->id]) }}" style="color: white">Editar</a>
                                </button>

                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Excluir Profissional">
                                    <a  onclick="apagar({{$profissional->id}})" >
                                        Excluir
                                    </a>
                                </button>
                            </td>

                        </tr>

                    @endforeach

                </tbody>
                <tfoot class="table-dark">
                    <tr>
                        <th></th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Atividade</th>
                        <th>Ações</th>
                    </tr>
                </tfoot>
            </table>

            </table>

            <!-- Paginate -->

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"><script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        $('#profissionais').DataTable( {
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





