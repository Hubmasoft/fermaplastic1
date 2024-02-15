@extends('store.template')

@section('content')
    @include('store.partials.slider')


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Bienvenido a Fermaplastic</h1>
                        <h5>Tu aliado confiable en inyección de plástico y servicios auxiliares</h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="info-box">
                                <!-- {{--                                <img src="img/icon6.png" alt="">--}} -->
                                <div class="ms-4">
                                    <!-- {{--                                    <h5>Digital Marketing</h5>--}} -->


                                    <!-- <p>Fermaplastic es líder en la inyección de plástico y prensado de termoplásticos,
                                        con más de 40 años de experiencia. Ofrecemos productos de alta calidad y
                                        servicios auxiliares a empresas de diversos sectores. </p> -->

                                    <p>Con más de 40 años de experiencia en la industria, Fermaplastic es una empresa del sector de la inyección de plástico y prensados de termoestable. Somos una empresa familiar que ha sido llevada con pasión y compromiso por el hijo de nuestra fundadora, continuando así su legado de excelencia.</p>

                                    <!-- <p>Con más de 40 años de experiencia en la industria, Fermaplastic se ha consolidado como una empresa líder en la inyección de plástico y prensados de termoestable. Somos una empresa familiar que ha sido llevada con pasión y compromiso por el hijo de nuestra fundadora, continuando así su legado de excelencia.</p>

                                        <p>En Fermaplastic, nos especializamos en la fabricación de productos de plástico mediante procesos de inyección y prensado de termoestable. Además, ofrecemos servicios auxiliares a otras empresas de inyección de plástico, brindando soluciones integrales para sus necesidades de producción.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <!-- {{--                                <img src="img/icon4.png" alt="">--}} -->
                                <div class="ms-4">
                                    <!-- {{--                                    <h5>E-mail Marketing</h5>--}} -->
                                    <!-- <p>Nuestro enfoque está en la precisión y la satisfacción del cliente, adaptándonos
                                        a sus necesidades y trabajando en estrecha colaboración. Utilizamos técnicas
                                        avanzadas para garantizar la durabilidad y funcionalidad de nuestros productos.
                                    </p> -->

                                    <p>En Fermaplastic, nos especializamos en la fabricación de productos de plástico mediante procesos de inyección y prensado de termoestable. Además, ofrecemos servicios auxiliares a otras empresas de inyección de plástico, brindando soluciones integrales para sus necesidades de producción.</p>
                                    <!-- <p>Trabajamos en estrecha colaboración con empresas del sector del Menaje, Electricidad, Fontanería y Maquinaria, proporcionando productos de plástico de alta calidad que cumplen con sus requisitos específicos. Nuestro equipo altamente capacitado y nuestra maquinaria especializada nos permiten ofrecer soluciones personalizadas y eficientes a nuestros clientes.</p>
                                <p>En Fermaplastic, valoramos la calidad y la precisión en cada etapa de nuestro proceso de fabricación. Utilizamos técnicas avanzadas de inyección de plástico y prensado de termoestable para garantizar la durabilidad y funcionalidad de nuestros productos. </p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <!-- {{--                                <img src="img/icon5.png" alt="">--}} -->
                                <div class="ms-4">
                                    <!-- {{--                                    <h5>Buisness Marketing</h5>--}} -->
                                    <!-- <p>Valoramos la calidad en cada etapa de fabricación y hemos ganado la confianza de
                                        numerosas empresas. Si buscas un socio confiable en inyección de plástico y
                                        servicios auxiliares, contáctanos para colaborar y lograr el éxito de tu
                                        negocio. </p> -->
                                    <p>Trabajamos en estrecha colaboración con empresas del sector del Menaje, Electricidad, Fontanería y Maquinaria, proporcionando productos de plástico de alta calidad que cumplen con sus requisitos específicos.</p>

                                    <!-- <p>Como empresa auxiliar de inyección de plástico, nos enorgullece apoyar a otras empresas en sus proyectos de producción. Nos adaptamos a las necesidades de nuestros clientes y trabajamos en estrecha colaboración con ellos para garantizar resultados excepcionales. Nuestro enfoque centrado en el cliente y nuestra dedicación al cumplimiento de plazos nos han ganado la confianza de numerosas empresas en el sector.</p>
                                    <p>Si estás buscando un socio confiable en la inyección de plástico y servicios auxiliares, Fermaplastic está aquí para ayudarte. Contáctanos hoy mismo y descubre cómo podemos colaborar para satisfacer tus necesidades de producción y lograr el éxito de tu negocio.</p> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3" style="text-align: end;">
                            <a href="/sobre_nosotros"><button class="btn btn-brand" style="background-color: #293462; color: white;">Más Info</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="align-self: center;">
                    <img class="infoImg-side" src="{{asset('img/about.jpeg')}}" alt="about">
                </div>
            </div>
        </div>
    </section>


{{--  --}}
    @include('store.partials.servicios')
    @include('store.partials.fotos')
    @include('store.partials.contacto')
@stop
