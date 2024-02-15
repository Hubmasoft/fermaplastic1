<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color: black !important;">
    <div class="container">
        <a class="navbar-brand" href="/">

            <!-- <img width="293" height="99" src="./img/logoPrincipal.png" class="custom-logo" alt="FERMAPLASTIC"> -->
            <img width="293" height="99" src="{{asset('img/logo/Color logo - no background.png')}}" class="custom-logo" alt="FERMAPLASTIC">
            <!-- <img width="293" height="99" src="./img/logoPrincipal.png" class="custom-logo" alt="FERMAPLASTIC"
                decoding="async"
                srcset="./img/logoPrincipal.png 3147w, ./img/logoPrincipal-300x101.pn 300w, ./img/logoPrincipal-1024x346.png 1024w, ./img/logoPrincipal-768x260.png 768w, ./img/logoPrincipal-1536x519.png 1536w, ./img/logoPrincipal--2048x692.png 2048w"
                sizes="(max-width: 293px) 100vw, 293px"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about">Sobre Nosotros</a>
                </li>
                <!--  -->
                <li class="nav-item">
                    <a class="nav-link" href="#services">Servicios</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
            </ul>
            <a href="#contacto" data-bs-toggle="modal" data-bs-target="#exampleModal"
               class="btn btn-brand ms-lg-3">Contacto</a>
        </div>
    </div>
</nav>
