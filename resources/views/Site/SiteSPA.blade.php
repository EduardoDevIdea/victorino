@include('Site.Banner.BannerHome')
@extends('layouts.base')
@section('content')

<style>
  .hero1 {
    background-image: url('../../../images/foto1.jpeg');
  }
  .hero2 {
    background-image: url('../../../images/foto3.jpg');
  }
  .hero3 {
    background-image: url('../../../images/foto2.jpg');
  }
  .paralax {
    background-attachment: fixed;
    height: 60%;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
  }
  #sobre {
    height: 80%;
  }
</style>

<div class="content-site">
      <div id="sobre">
        @include('Site.sobre.sobre')
      </div>
      <div class="hero1 paralax"></div>
      <div id="sobre">
        @include('Site.sobre.sobre')
      </div>
      <div class="hero2 paralax"></div>
      <div id="sobre">
        @include('Site.sobre.sobre')
      </div>
      <div class="hero3 paralax"></div>
      <div id="sobre">
        @include('Site.sobre.sobre')
      </div>
</div>


@endsection