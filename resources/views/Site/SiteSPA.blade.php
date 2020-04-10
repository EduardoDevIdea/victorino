@include('Site.Banner.BannerHome')
@extends('layouts.base')
@section('content')
<style>
  .paralax {
    background-image: url('/images/image.png');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    background-attachment: fixed;
    height: 500px;
  }
</style>
<div class="container">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit facilis provident adipisci vero consequuntur deserunt cumque minima laudantium? In adipisci tempore, consequuntur eligendi maxime quaerat iure laboriosam possimus mollitia sunt.</p>
    <div class="paralax" >
        {{-- <img src="{{asset('images/foto2.jpg')}}" alt=""> --}}
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus amet fuga ad, officia in facere vel ea. Ipsum, voluptatem labore. Cupiditate voluptate maiores id distinctio reprehenderit doloremque earum, provident autem!</p>
</div>
   

@endsection