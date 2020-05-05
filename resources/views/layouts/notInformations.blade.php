<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
    .warning{
        width: 100%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding-bottom: 100px; 
    }
    .text_information {
        text-align: center;
        font-family: Roboto;
    }
    .information_access {
        width: 50%;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding-top: 80px;
    }
    .accesss_button {
        float: left;
    }
    .img_victoriano {
        float: right;
    }
</style>
<div class="container notInformation">
    <div class="text-center warning"> 
        <img  src="{{asset('images/download5.jpg')}}" alt="">
    </div>
    <div class="text_information">
        <h1>Esta página esta em manutenção</h1>
        <div class="information_access">
            <h3>Se você for o propietario deste site, acesse o painel administrativo para começar a inserir conteudo! </h3>
        </div>
    </div>
    <div class="footer_information">
        <a class="access_button" href="{{url('/login')}}">
            Acesse
        </a>
        <div class="img_victoriano">
            <img src="{{asset('images/logo-removebg-preview.png')}}" alt="" width="100px" height="50px">
        </div>
    </div>
</div>