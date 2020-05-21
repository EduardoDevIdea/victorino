@extends('base_home')
@section('content')
<div class="row">

    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple-plus"></i></h1>
                <h6 class="text-white">Usuarios</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-border-color"></i></h1>
                <h6 class="text-white">Sobre nós</h6>
            </div>
        </div>
    </div>
     <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-camera-enhance"></i></h1>
                <h6 class="text-white">Imagens</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-check-circle"></i></h1>
                <h6 class="text-white">Especialidades</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                <h6 class="text-white">O Espaço</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                <h6 class="text-white">Blog</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                <h6 class="text-white">Contato</h6>
            </div>
        </div>
    </div>
   
</div>

<div class="card-body">
    <h4 class="card-title">Ultimas Publicações</h4>
</div>
<div class="comment-widgets scrollable">
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row m-t-0">
        <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
        <div class="comment-text w-100">
            <h6 class="font-medium">James Anderson</h6>
            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
            <div class="comment-footer">
                <span class="text-muted float-right">April 14, 2016</span> 
                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                <button type="button" class="btn btn-success btn-sm">Publish</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row">
        <div class="p-2"><img src="assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
        <div class="comment-text active w-100">
            <h6 class="font-medium">Michael Jorden</h6>
            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
            <div class="comment-footer">
                <span class="text-muted float-right">May 10, 2016</span> 
                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                <button type="button" class="btn btn-success btn-sm">Publish</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row">
        <div class="p-2"><img src="assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
        <div class="comment-text w-100">
            <h6 class="font-medium">Johnathan Doeting</h6>
            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
            <div class="comment-footer">
                <span class="text-muted float-right">August 1, 2016</span> 
                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                <button type="button" class="btn btn-success btn-sm">Publish</button>
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>

    <a href="">Ver todas as postagens</a>
</div>

</div>
@endsection