<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

LOGO
    <hr>
    @if($logo_inicio == 0)
        <div><img class="brand-logo-light" src="images/default_images/logo/LogoAzul.PNG" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
    @else 
        <div><a href="#home"><img class="brand-logo-light" src="{{asset('storage/'.$logo_inicio->path)}}" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
        <!--div><a href="#home"><img class="brand-logo-light" src="{{asset('storage/'.$logo_inicio[0]->path)}}" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div-->
    @endif
    <hr>

BACKGROUND
    <hr>
    @if($bg_img == 0)
        <img class="brand-logo-light" src="images/default_images/background/bkg1.jpg" alt="" width="300" height="150" srcset="images/logo-default-280x113.png 2x"/>
    @else
        <div class="main-bunner-img" style="background-image: url('storage/{{$bg_img->path}}'); background-size: cover;"></div>
        <!--div class="main-bunner-img" style="background-image: url('storage/{{$bg_img[0]->path}}'); background-size: cover;"></div-->
    @endif
    <hr>

SOBRE
    <hr>

    @if($about['img'] == 0)
        <div class="box-image"><img class="box-image-static" src="images/default_images/sobre/sobre_1.jpg" alt="" width="300px" height="150px"/>
    @else
        <div class="box-image"><img class="box-image-static" src="storage/{{$about->img}}" alt="" width="580px" height="520px"/>
        <h6 style="text-align: center; padding: 10px;">{{$about->legenda}}</h6>
        <!--div class="box-image"><img class="box-image-static" src="storage/{{$about[0]->img}}" alt="" width="580px" height="520px"/-->
        <!--h6 style="text-align: center; padding: 10px;">{{$about[0]->legenda}}</h6-->
        <!--h2>Quem Somos</h2-->
        <!--p>{!! $about[0]->sobre_clinica !!}</p-->
    @endif

    @if($about['sobre_clinica'])
        <p>{!! $about->sobre_clinica !!}</p>
    @else
        <p>Em breve, informações sobre o instituto aqui.</p>
    @endif

    @if($about['informacao_geral'])
        {!! $about->informacao_geral !!}
    @else
        Em breve, mais informações aqui.
    @endif
    <hr>

ESPECIALIDADES
    <hr>
    @if(count($especialidade) == 0)
        <h4 style="text-align: center; width: 100%;">As especialidades estarão disponiveis aqui, em breve.</h4>
    @else
        @foreach ($especialidade as $item_especialidade)
            <p>{{$item_especialidade->nome}}</p>
            <p>{!! $item_especialidade->description !!}</p>
        @endforeach
    @endif
    <hr>

ESPAÇO
    <hr>
    @if (count($espaco) == 0)
        <p><img src="images/default_images/espaco/estrada.png" alt="" style="width; 300px; height: 150px;"></p>
        <p><img src="images/default_images/espaco/recepcao_1.png" alt="" style="width; 300px; height: 150px;"></p>
        <p><img src="images/default_images/espaco/recepcao_2.png" alt="" style="width; 300px; height: 150px;"></p>
        <p><img src="images/default_images/espaco/recepcao_3.png" alt="" style="width; 300px; height: 150px;"></p>
        <p><img src="images/default_images/espaco/sala_1.png" alt="" style="width; 300px; height: 150px;"></p>
        <p><img src="images/default_images/espaco/sala_2.png" alt="" style="width; 300px; height: 150px;"></p>
        <p><img src="images/default_images/espaco/sala_3.png" alt="" style="width; 300px; height: 150px;"></p>
    @else
        @foreach ($espaco as $item_space)
            <p><img src="{{asset('storage/'.$item_space->path)}}" alt="" style="width: 30px; height: 150px;"/></p>
        @endforeach
    @endif
    <hr>

PROFISSIONAIS
    <hr>
    @if (count($profi) == 0)
        <p>Os profissionais estarão disponíveis aqui, em breve.</p>
    @else
        @foreach ($profi as $item_profi)
            <hr>
            <p><img src="storage/{{$item_profi->img}}" style="width: 300px; height: 150px;"/></p>
            <p>{{$item_profi->nome}}</p>
            <p>{{$item_profi->cargo}}</p>
            <p>{{$item_profi->atividade}}</p>
            <p>{{$item_profi->registro}}</p>
            <p>{!! $item_profi->sobre !!}</p>
        @endforeach
    @endif
    <hr>

BLOG
    <hr>
    @if (count($post) == 0)
        <p>Publicações estarão disponíveis aqui, em breve.</p>
    @else
        @foreach($post as $item_post)
            <hr>
            <p>{{$item_post->created_at->format('d/m/Y')}}</p>
            <img src="{{asset('storage/'.$item_post->img)}}" alt="" style="width: 250px; height:180px">
            <p>{{$item_post->titulo}}</p>
            <p>{{$item_post->subtitulo}}</p>
        @endforeach
    @endif
    <hr>

CONTATOS
    <hr>
    @if (count($contact) == 0)
        <p>Nossos contatos e endereço estarão disponíveis aqui, em breve.</p>
    @else
        @foreach($contact as $item_contact)
            <p>{{$item_contact->telefone1}}</p>
            <p>{{$item_contact->telefone2}}</p>
            <p>{{$item_contact->wpp}}</p>
            <p>{{$item_contact->email}}</p>
            <p>{{$item_contact->endereco}}</p>
            <p>{{$item_contact->facebook}}</p>
            <p>{{$item_contact->instagram}}</p>
            <p>{{$item_contact->twitter}}</p>
        @endforeach
    @endif
    <hr>


</body>
</html>