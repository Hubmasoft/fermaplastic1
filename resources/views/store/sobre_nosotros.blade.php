@extends('store.template')

@section('content')

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
                <!-- <div class="col-lg-5 py-5"> -->
                <div class="row" style="text-align: justify;">
                    <div class="col-12">
                        <div class="info-box">
                            <!-- {{--                                <img src="img/icon6.png" alt="">--}} -->
                            <div class="ms-4">
                                <!-- {{--                                    <h5>Digital Marketing</h5>--}} -->



                                <!-- <p>Con más de 40 años de experiencia en la industria, Fermaplastic se ha consolidado como una empresa líder en la inyección de plástico y prensados de termoestable. Somos una empresa familiar que ha sido llevada con pasión y compromiso por el hijo de nuestra fundadora, continuando así su legado de excelencia.</p>

                                    <p>En Fermaplastic, nos especializamos en la fabricación de productos de plástico mediante procesos de inyección y prensado de termoestable. Además, ofrecemos servicios auxiliares a otras empresas de inyección de plástico, brindando soluciones integrales para sus necesidades de producción.</p> -->


                                <p>Con más de 40 años de experiencia en la industria, Fermaplastic es una empresa del sector de la inyección de plástico y prensados de termoestable. Somos una empresa familiar que ha sido llevada con pasión y compromiso por el hijo de nuestra fundadora, continuando así su legado de excelencia.</p>

                                <p>En Fermaplastic, nos especializamos en la fabricación de productos de plástico mediante procesos de inyección y prensado de termoestable. Además, ofrecemos servicios auxiliares a otras empresas de inyección de plástico, brindando soluciones integrales para sus necesidades de producción.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <!-- {{--                                <img src="img/icon4.png" alt="">--}} -->
                            <div class="ms-4">
                                <!-- {{--                                    <h5>E-mail Marketing</h5>--}} -->

                                <!-- <p>Trabajamos en estrecha colaboración con empresas del sector del Menaje, Electricidad, Fontanería y Maquinaria, proporcionando productos de plástico de alta calidad que cumplen con sus requisitos específicos. Nuestro equipo altamente capacitado y nuestra maquinaria especializada nos permiten ofrecer soluciones personalizadas y eficientes a nuestros clientes.</p>
                            <p>En Fermaplastic, valoramos la calidad y la precisión en cada etapa de nuestro proceso de fabricación. Utilizamos técnicas avanzadas de inyección de plástico y prensado de termoestable para garantizar la durabilidad y funcionalidad de nuestros productos. </p> -->

                                <p>Trabajamos en estrecha colaboración con empresas del sector del Menaje, Electricidad, Fontanería y Maquinaria, proporcionando productos de plástico de alta calidad que cumplen con sus requisitos específicos. Nuestro equipo altamente capacitado y nuestra maquinaria especializada nos permiten ofrecer soluciones personalizadas y eficientes a nuestros clientes.</p>

                                <p>En Fermaplastic, valoramos la calidad y la precisión en cada etapa de nuestro proceso de fabricación. Utilizamos técnicas avanzadas de inyección de plástico y prensado de termoestable para garantizar la durabilidad y funcionalidad de nuestros productos. </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <!-- {{--                                <img src="img/icon5.png" alt="">--}} -->
                            <div class="ms-4">
                                <!-- {{--                                    <h5>Buisness Marketing</h5>--}} -->

                                <!-- <p>Como empresa auxiliar de inyección de plástico, nos enorgullece apoyar a otras empresas en sus proyectos de producción. Nos adaptamos a las necesidades de nuestros clientes y trabajamos en estrecha colaboración con ellos para garantizar resultados excepcionales. Nuestro enfoque centrado en el cliente y nuestra dedicación al cumplimiento de plazos nos han ganado la confianza de numerosas empresas en el sector.</p>
                                <p>Si estás buscando un socio confiable en la inyección de plástico y servicios auxiliares, Fermaplastic está aquí para ayudarte. Contáctanos hoy mismo y descubre cómo podemos colaborar para satisfacer tus necesidades de producción y lograr el éxito de tu negocio.</p> -->

                                <p>Como empresa auxiliar de inyección de plástico, nos enorgullece apoyar a otras empresas en sus proyectos de producción. Nos adaptamos a las necesidades de nuestros clientes y trabajamos en estrecha colaboración con ellos para garantizar resultados excepcionales. Nuestro enfoque centrado en el cliente y nuestra dedicación al cumplimiento de plazos nos han ganado la confianza de numerosas empresas en el sector.</p>

                                <p>Si estás buscando un socio confiable en la inyección de plástico y servicios auxiliares, Fermaplastic está aquí para ayudarte. Contáctanos hoy mismo y descubre cómo podemos colaborar para satisfacer tus necesidades de producción y lograr el éxito de tu negocio.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 mb-3" style="text-align: end;">
                        <a href="./INDES.html"><button class="btn btn-brand" style="background-color: #293462; color: white;">Más Info</button></a>
                    </div> -->
                </div>
                <!-- </div> -->

            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5" style="align-self: center;">
                    <!-- <img class="infoImg-side" src="./img/F2.jpeg" alt="about"> -->
                    <img src="{{asset('img/F2.jpeg')}}" alt="about">
                </div>

                <div class="col-lg-5" style="align-self: center;">
                    <!-- <img class="infoImg-side" src="./img/F2.jpeg" alt="about"> -->
                    <img src="{{asset('img/F3.jpeg')}}" alt="about">
                </div>

            </div>
        </div>
    </section>



    @include('store.partials.contacto')
@stop



























{{--****************FORMATOO HTML***********--}}
{{--<!doctype html>--}}
{{--<html lang="es">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}


{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">--}}
{{--    <!-- OWL CSS -->--}}
{{--    <link rel="stylesheet" href="./css/owl.carousel.min.css">--}}
{{--    <link rel="stylesheet" href="./css/owl.theme.default.min.css">--}}
{{--    <!--Boxicons links -->--}}
{{--    <!-- --}}{{--    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">--}}{{-- -->--}}
{{--    <!-- Custom CSS File-->--}}
{{--    <link rel="stylesheet" href="./css/main.css">--}}
{{--    <!-- Icons-->--}}
{{--    <!-- --}}{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">--}}{{-- -->--}}
{{--    <!-- favicon-->--}}
{{--    <link rel="icon" type="image/png" href="./img/favcionF.png">--}}
{{--    <link rel="shortcut icon" type="image/png" href="./img/favcionF.png">--}}

{{--    <title>Fermaplastic</title>--}}
{{--</head>--}}

{{--<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">--}}
{{--<div class="container">--}}
{{--    <!-- @if (count($errors) > 0)--}}
{{--        <div class="alert show showAlert">--}}
{{--            <div class="row" style="text-align: center; align-items: center;">--}}
{{--                <div class="col-2"> <i class="fa-solid fa-triangle-exclamation" style="font-size: xxx-large;"></i></div>--}}
{{--                <div class="col-8">--}}
{{--                    <ul style="list-style: none;">--}}
{{--@foreach ($errors->all() as $error)--}}
{{--            <li class="lead">{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="col-2">--}}
{{--        <div class="close-btn">--}}
{{--            <i class="fa-solid fa-x"></i>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}


{{--<script>--}}
{{--setTimeout(function(){--}}
{{--$('.alert').removeClass("show");--}}
{{--$('.alert').addClass("hide");--}}
{{--},5000);--}}
{{--</script>--}}
{{--@endif -->--}}

{{--</div>--}}

{{--<!-- @if(\Session::has('message') || \Session::has('error'))--}}
{{--    @include('store.partials.message')--}}
{{--@endif -->--}}



{{--<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top"> -->--}}
{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color: black !important;">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="#home">--}}

{{--            <!-- <img width="293" height="99" src="./img/logoPrincipal.png" class="custom-logo" alt="FERMAPLASTIC"> -->--}}
{{--            <img width="293" height="99" src="./img/logo/Color logo - no background.png" class="custom-logo" alt="FERMAPLASTIC">--}}
{{--            <!-- <img width="293" height="99" src="./img/logoPrincipal.png" class="custom-logo" alt="FERMAPLASTIC"--}}
{{--                decoding="async"--}}
{{--                srcset="./img/logoPrincipal.png 3147w, ./img/logoPrincipal-300x101.pn 300w, ./img/logoPrincipal-1024x346.png 1024w, ./img/logoPrincipal-768x260.png 768w, ./img/logoPrincipal-1536x519.png 1536w, ./img/logoPrincipal--2048x692.png 2048w"--}}
{{--                sizes="(max-width: 293px) 100vw, 293px"> -->--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"--}}
{{--                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="./index.html#home">Inicio</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#about">Sobre Nosotros</a>--}}
{{--                </li>--}}
{{--                <!-- <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#services">Servicios</a>--}}
{{--                </li> -->--}}
{{--                <li class="nav-item" style="display: none;">--}}
{{--                    <a class="nav-link" href="#contacto">Contacto</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <a href="#contacto" data-bs-toggle="modal" data-bs-target="#exampleModal"--}}
{{--               class="btn btn-brand ms-lg-3">Contacto</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}





{{--<section id="about">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="intro">--}}
{{--                    <h1>Bienvenido a Fermaplastic</h1>--}}
{{--                    <h5>Tu aliado confiable en inyección de plástico y servicios auxiliares</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row justify-content-center">--}}
{{--            <!-- <div class="col-lg-5 py-5"> -->--}}
{{--            <div class="row" style="text-align: justify;">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="info-box">--}}
{{--                        <!-- --}}{{--                                <img src="img/icon6.png" alt="">--}}{{-- -->--}}
{{--                        <div class="ms-4">--}}
{{--                            <!-- --}}{{--                                    <h5>Digital Marketing</h5>--}}{{-- -->--}}



{{--                            <!-- <p>Con más de 40 años de experiencia en la industria, Fermaplastic se ha consolidado como una empresa líder en la inyección de plástico y prensados de termoestable. Somos una empresa familiar que ha sido llevada con pasión y compromiso por el hijo de nuestra fundadora, continuando así su legado de excelencia.</p>--}}
{{--                            --}}
{{--                                <p>En Fermaplastic, nos especializamos en la fabricación de productos de plástico mediante procesos de inyección y prensado de termoestable. Además, ofrecemos servicios auxiliares a otras empresas de inyección de plástico, brindando soluciones integrales para sus necesidades de producción.</p> -->--}}


{{--                            <p>Con más de 40 años de experiencia en la industria, Fermaplastic es una empresa del sector de la inyección de plástico y prensados de termoestable. Somos una empresa familiar que ha sido llevada con pasión y compromiso por el hijo de nuestra fundadora, continuando así su legado de excelencia.</p>--}}

{{--                            <p>En Fermaplastic, nos especializamos en la fabricación de productos de plástico mediante procesos de inyección y prensado de termoestable. Además, ofrecemos servicios auxiliares a otras empresas de inyección de plástico, brindando soluciones integrales para sus necesidades de producción.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 mt-4">--}}
{{--                    <div class="info-box">--}}
{{--                        <!-- --}}{{--                                <img src="img/icon4.png" alt="">--}}{{-- -->--}}
{{--                        <div class="ms-4">--}}
{{--                            <!-- --}}{{--                                    <h5>E-mail Marketing</h5>--}}{{-- -->--}}

{{--                            <!-- <p>Trabajamos en estrecha colaboración con empresas del sector del Menaje, Electricidad, Fontanería y Maquinaria, proporcionando productos de plástico de alta calidad que cumplen con sus requisitos específicos. Nuestro equipo altamente capacitado y nuestra maquinaria especializada nos permiten ofrecer soluciones personalizadas y eficientes a nuestros clientes.</p>--}}
{{--                        <p>En Fermaplastic, valoramos la calidad y la precisión en cada etapa de nuestro proceso de fabricación. Utilizamos técnicas avanzadas de inyección de plástico y prensado de termoestable para garantizar la durabilidad y funcionalidad de nuestros productos. </p> -->--}}

{{--                            <p>Trabajamos en estrecha colaboración con empresas del sector del Menaje, Electricidad, Fontanería y Maquinaria, proporcionando productos de plástico de alta calidad que cumplen con sus requisitos específicos. Nuestro equipo altamente capacitado y nuestra maquinaria especializada nos permiten ofrecer soluciones personalizadas y eficientes a nuestros clientes.</p>--}}

{{--                            <p>En Fermaplastic, valoramos la calidad y la precisión en cada etapa de nuestro proceso de fabricación. Utilizamos técnicas avanzadas de inyección de plástico y prensado de termoestable para garantizar la durabilidad y funcionalidad de nuestros productos. </p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 mt-4">--}}
{{--                    <div class="info-box">--}}
{{--                        <!-- --}}{{--                                <img src="img/icon5.png" alt="">--}}{{-- -->--}}
{{--                        <div class="ms-4">--}}
{{--                            <!-- --}}{{--                                    <h5>Buisness Marketing</h5>--}}{{-- -->--}}

{{--                            <!-- <p>Como empresa auxiliar de inyección de plástico, nos enorgullece apoyar a otras empresas en sus proyectos de producción. Nos adaptamos a las necesidades de nuestros clientes y trabajamos en estrecha colaboración con ellos para garantizar resultados excepcionales. Nuestro enfoque centrado en el cliente y nuestra dedicación al cumplimiento de plazos nos han ganado la confianza de numerosas empresas en el sector.</p>--}}
{{--                            <p>Si estás buscando un socio confiable en la inyección de plástico y servicios auxiliares, Fermaplastic está aquí para ayudarte. Contáctanos hoy mismo y descubre cómo podemos colaborar para satisfacer tus necesidades de producción y lograr el éxito de tu negocio.</p> -->--}}

{{--                            <p>Como empresa auxiliar de inyección de plástico, nos enorgullece apoyar a otras empresas en sus proyectos de producción. Nos adaptamos a las necesidades de nuestros clientes y trabajamos en estrecha colaboración con ellos para garantizar resultados excepcionales. Nuestro enfoque centrado en el cliente y nuestra dedicación al cumplimiento de plazos nos han ganado la confianza de numerosas empresas en el sector.</p>--}}

{{--                            <p>Si estás buscando un socio confiable en la inyección de plástico y servicios auxiliares, Fermaplastic está aquí para ayudarte. Contáctanos hoy mismo y descubre cómo podemos colaborar para satisfacer tus necesidades de producción y lograr el éxito de tu negocio.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- <div class="col-12 mb-3" style="text-align: end;">--}}
{{--                    <a href="./INDES.html"><button class="btn btn-brand" style="background-color: #293462; color: white;">Más Info</button></a>--}}
{{--                </div> -->--}}
{{--            </div>--}}
{{--            <!-- </div> -->--}}

{{--        </div>--}}
{{--        <div class="row justify-content-center mt-5">--}}
{{--            <div class="col-lg-5" style="align-self: center;">--}}
{{--                <!-- <img class="infoImg-side" src="./img/F2.jpeg" alt="about"> -->--}}
{{--                <img src="./img/F2.jpeg" alt="about">--}}
{{--            </div>--}}

{{--            <div class="col-lg-5" style="align-self: center;">--}}
{{--                <!-- <img class="infoImg-side" src="./img/F2.jpeg" alt="about"> -->--}}
{{--                <img src="./img/F3.jpeg" alt="about">--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}










{{--<!-- <section id="services" class="text-center">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="intro">--}}
{{--                    <h6>Servicios</h6>--}}
{{--                    <h1>Nuestro Servicio Incluye</h1>--}}
{{--                    <p class="mx-auto">En Fermaplastic, confiamos en que nuestros productos lo dejarán satisfecho.--}}
{{--                        Los materiales de alta calidad que usamos junto con el personal son la garantía. En el--}}
{{--                        siguiente inventario encontrará varios ejemplos, comuníquese con nosotros si busca algo que--}}
{{--                        no haya encontrado. Un miembro del equipo siempre lo podrá ayudar.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row g-4">--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="service">--}}
{{--                    <img src="./img/servicio1.jpeg" alt="servicio1">--}}
{{--                    <h5>Servicio 1</h5>--}}
{{--                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                        printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="service">--}}
{{--                    <img src="./img/servicio1.jpeg" alt="servicio1">--}}
{{--                    <h5>Servicio 1</h5>--}}
{{--                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                        printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="service">--}}
{{--                    <img src="./img/servicio1.jpeg" alt="servicio1">--}}
{{--                    <h5>Servicio 1</h5>--}}
{{--                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                        printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6">--}}
{{--                <div class="service">--}}
{{--                    <img src="./img/servicio1.jpeg" alt="servicio1">--}}
{{--                    <h5>Servicio 1</h5>--}}
{{--                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
{{--                        printer took a galley of type and scrambled it to make a type specimen book.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--</section> -->--}}






{{--<!-- <section class="bg-light" id="fotos">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="intro">--}}
{{--                    <h6>Area de trabajo</h6>--}}
{{--                    <h1>Fotos</h1>--}}
{{--                    <p class="mx-auto">Inyección de plásticos // Prensado de termoestables // Asesoramiento en--}}
{{--                        materiales para las piezas // Construcción de moldes a través de planos o muestras //--}}
{{--                        Montaje de piezas​</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div id="projects-slider" class="owl-theme owl-carousel">--}}
{{--        <div class="project">--}}
{{--            <div class="overlay"></div>--}}
{{--            <img src="./img/noves/IMG_0806.jpeg" alt="img1">--}}
{{--            <div class="content">--}}
{{--                <h2>Materiales de calidad</h2>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="project">--}}
{{--            <div class="overlay"></div>--}}
{{--            <img src="./img/F1.jpeg" alt="img1">--}}
{{--            <div class="content">--}}
{{--                <h2>Garantizada</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="project">--}}
{{--            <div class="overlay"></div>--}}
{{--            <img src="./img/noves/IMG_0807 3.jpeg" alt="img1">--}}
{{--            <div class="content">--}}
{{--                <h2>Satisfacción</h2>--}}
{{--            </div>--}}
{{--        </div>--}}



{{--    </div>--}}
{{--</section> -->--}}





{{--<section id="contacto">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="intro">--}}
{{--                    <h6>Contacto</h6>--}}
{{--                    <h1>¡Contáctanos!</h1>--}}
{{--                    <p class="mx-auto">¿Quieres hacer piezas? Escríbenos o llámanos. Tenemos la mejor disposición--}}
{{--                        para proveerte toda la información que necesites y ayudarte con cualquier pregunta que--}}
{{--                        puedas tener.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-6" style="text-align: center; align-self: center;">--}}
{{--                <a style="text-decoration: none;" href="tel:+34648693534">--}}
{{--                    <p class="lead"><i class="fa-solid fa-phone"></i> <span>+34 648 693 534</span></p>--}}
{{--                </a>--}}
{{--                <a style="text-decoration: none;" href="mailto:info@fermaplastic.com" target="_blank">--}}
{{--                    <p class="lead"><i class="fa-solid fa-envelope"></i> <span>info@fermaplastic.com</span></p>--}}
{{--                </a>--}}
{{--                <a style="text-decoration: none;" href="https://goo.gl/maps/hv9frfSMKcfxdfsm9" target="_blank">--}}
{{--                    <p class="lead"><i class="fa-solid fa-location-dot"></i> <span>Av. Idelfons Cerdà 27, <br>08540,--}}
{{--                                Centelles <br> España</span></p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-md-6" style="text-align: center;">--}}
{{--                <iframe class="googleMapsFrame"--}}
{{--                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.4088889484997!2d2.2223043158290197!3d41.79795127922876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4db8abb8c9883%3A0x8ab5f9625fabfe1b!2sAvinguda%20d&#39;Ildefons%20Cerd%C3%A0%2C%2027%2C%2008540%20Centelles%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses!2snl!4v1648211744981!5m2!1ses!2snl"--}}
{{--                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


{{--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog-centered modal-xl">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body p-0">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row gy-4">--}}
{{--                        <div class="col-lg-4 col-sm-12 bg-cover"--}}
{{--                             style="background-image: url(./img/contacto.jpeg); min-height:300px; background-position: right;">--}}
{{--                            <div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <form method="post" action="mailto:info@fermaplastic.com" class="p-lg-5 col-12 row g-3">--}}
{{--                                <!-- <form method="post" action="./index.php/contacto" class="p-lg-5 col-12 row g-3"> -->--}}
{{--                                <!-- @csrf -->--}}
{{--                                <div>--}}
{{--                                    <h1>CONTACTO</h1>--}}
{{--                                    <!-- <h1>Ponerse en contacto</h1> -->--}}
{{--                                    <!-- <p>No dude en ponerse en contacto con nosotros y nos pondremos en contacto con--}}
{{--                                        usted lo antes posible.</p> -->--}}
{{--                                    <p>Gracias por ponerse en contacto con nosotros, le contestaremos lo antes posible.</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="nombre" class="form-label">Nombre <span--}}
{{--                                            style="color: red;">*</span></label>--}}
{{--                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre"--}}
{{--                                           id="nombre" aria-describedby="emailHelp" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="apellidos" class="form-label">Apellidos <span--}}
{{--                                            style="color: red;">*</span></label>--}}
{{--                                    <input type="text" class="form-control" placeholder="Apellidos" id="apellidos"--}}
{{--                                           name="apellidos" aria-describedby="emailHelp" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="email" class="form-label">Correo electrónico <span--}}
{{--                                            style="color: red;">*</span></label>--}}
{{--                                    <input type="email" class="form-control" placeholder="email@ejemplo.com"--}}
{{--                                           name="email" id="email" aria-describedby="emailHelp" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="tel" class="form-label">Teléfono <span--}}
{{--                                            style="color: red;">*</span></label>--}}
{{--                                    <input type="text" class="form-control" placeholder="+34600854585" name="tel"--}}
{{--                                           id="tel" aria-describedby="emailHelp" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="empresa" class="form-label">Empresa <span--}}
{{--                                            style="color: red;">*</span></label>--}}
{{--                                    <input type="empresa" class="form-control" placeholder="Empresa"--}}
{{--                                           name="empresa" id="empresa" aria-describedby="empresaHelp" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <label for="asunto" class="form-label">Asunto <span--}}
{{--                                            style="color: red;">*</span></label>--}}
{{--                                    <input type="text" class="form-control" placeholder="Asunto" name="asunto"--}}
{{--                                           id="asunto" aria-describedby="asuntoHelp" required>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <label for="mensaje" class="form-label">Mensaje <span--}}
{{--                                            style="color: red;">*</span></label>--}}
{{--                                    <textarea name="mensaje" placeholder="Hola, escribe tu mensaje aqui,..."--}}
{{--                                              class="form-control" id="mensaje" rows="4" maxlength="240"--}}
{{--                                              required></textarea>--}}
{{--                                </div>--}}

{{--                                <div class="col-12 mb-3">--}}
{{--                                    <button type="submit" class="btn btn-brand" style="background-color: #293462; color: white;">Enviar</button>--}}
{{--                                    <!-- --}}{{--                                    {!! Form::submit('Enviar', array('class'=>'btn btn-brand text-uppercase')) !!}--}}{{-- -->--}}
{{--                                </div>--}}

{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}







{{--<footer>--}}
{{--    <div class="footer-top text-center">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-6 text-center">--}}
{{--                    <h4 class="navbar-brand">Fermaplastic</h4>--}}
{{--                    <p>¿Necesitas que hagamos piezas de plástico?</p>--}}
{{--                    <div class="col-auto social-iconss">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <a style="text-decoration: none;" href="tel:+34648693534">--}}
{{--                                    <p class="lead"><i class="fa-solid fa-phone"></i> <span>+34 648 693 534</span>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <a style="text-decoration: none;" href="mailto:info@fermaplastic.com"--}}
{{--                                   target="_blank">--}}
{{--                                    <p class="lead"><i class="fa-solid fa-envelope"></i>--}}
{{--                                        <span>info@fermaplastic.com</span>--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="footer-bottom text-center">--}}
{{--        <p class="mb-0">--}}
{{--            © Copyright 2022 FERMAPLASTIC.COM <a target="_blank" href="https://amanghotra19.github.io/leamke/">BY--}}
{{--                AMAN--}}
{{--                (KODECODER)</a>--}}
{{--        </p>--}}
{{--    </div>--}}
{{--</footer>--}}




{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>--}}
{{--<script src="https://kit.fontawesome.com/5d716e9845.js"></script>--}}
{{--<script src="./js/owl.carousel.min.js"></script>--}}
{{--<script src="./js/main.js"></script>--}}

{{--</body>--}}

{{--</html>--}}
