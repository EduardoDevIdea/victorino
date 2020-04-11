@include('Site.Banner.BannerHome')
@extends('layouts.base')
@section('content')

<style>
    .content-site {
       
    }
</style>

<div class="content-site">
    <div class="container">
      @include('Site.sobre.sobre')
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{asset('js/parallax.min.js')}}"></script>

@endsection