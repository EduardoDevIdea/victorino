<style>
    .text_info {
        color: #B06F1A;
        text-justify: left;
    }
    .separator {
        height: 1px;
        width: 100%;
        background-color: #B06F1A;
    }
    .section_text {
        padding-bottom: 50px;
    }
    .section_text h2{
        color: white;
        text-align: center;
    }
    .filosofia {
        float: right;
    }
    .space_photo {
        width: 100%;
        height: 30%;
        background-color: white;
    }
</style>
<div class="container">
    <div class="section_text">
        <h2>Sobre Nós</h2>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="space filosofia">
                <h4 class="text_info">Filosofia</h4>
                <hr class="separator">
                <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sequi illo debitis consectetur laboriosam ut? Modi ratione, fugiat harum, nesciunt voluptatum rerum, nisi ipsam minus corrupti beatae similique maiores. Hic.</p>
            </div>
            <div class="space funcionamento">
                <h4 class="text_info">Funcionamento</h4>
                <hr class="separator">
                <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, autem. Veniam, voluptatibus. Veritatis, voluptatibus! Veritatis blanditiis recusandae molestiae nulla aperiam excepturi. Consequuntur sed eos repellat rerum nulla aperiam, commodi blanditiis.</p>
            </div>
        </div>
        <div class="col-4">
            <div class="space_photo image_owner">
                <img src="{{asset('images/owner.jpg')}}" alt="">
            </div>
        </div>
        
    </div>
</div>