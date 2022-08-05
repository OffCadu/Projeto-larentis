@extends('layouts.basico')


@section('conteudo')

@component('layouts._components.topo_login_registro', ['unidade' => 'larentisII'])
@endcomponent

    <main>

        <!-- slider Area Start-->
        @include('layouts._partials.slider_topo')
        <!-- slider Area End-->


        <!-- Room Start -->
       <section class="room-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--font-back-tittle  -->
                    <div class="font-back-tittle mb-45">
                        <div class="archivment-front">
                            <h3>Suíte Love Casal</h3>
                        </div>
                        <h3 class="archivment-back">Suíte Love Casal</h3>
                    </div>
                </div>
            </div>

<!--inicio sobre-->
<!-- Titulo-sobre  -->
    <section class="make-customer-area fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="customer-img mb-120">
                        <img src="../assets/img/larentisII/quarto_6.jpg" class="customar-img1" alt="">
                        <img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
                    </div>
                </div>
                <div class=" col-6 col-6">
                    <div class="customer-caption">
                        <div class="caption-details">
                            <p class="pera-dtails"> Detalhes do quarto </p>
                            <p> Tamanho: 14m²<br><br> 
                                Capacidade: 2 pessoas<br><br> 
                                Descrição: É um ótimo quarto para casais que buscam um local calmo e quente para intensificar ainda mais seu amor, este quarto possui vista para nosso jardim e uma rede na varanda!<br><br> 
                                Especificações: Esta suíte possui ar-condicionado, frigobar, cama de casal, TV a cabo e rede.<br><br>
                                Preço: 140R$ a diária.
                            </p>
                            <!--<a href="#" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Make customer End-->
            <!-- Booking Room Start-->
            @component('layouts._components.reserva_inicial', ['unidade' => 'larentis'])
            @endcomponent
            <!-- Booking Room End-->
    </main>
    @include('layouts._partials.footer')
@endsection
