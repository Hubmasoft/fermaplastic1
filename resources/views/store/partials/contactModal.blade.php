<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                             style="background-image: url({{asset('img/contacto.jpeg')}}); min-height:300px; background-position: right;">
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-8">
{{--                            <form method="post" action="mailto:info@fermaplastic.com" class="p-lg-5 col-12 row g-3">--}}
                                <form method="post" action="index.php/contacto" class="p-lg-5 col-12 row g-3">
                                @csrf
                                <div>
                                    <h1>CONTACTO</h1>
                                    <!-- <h1>Ponerse en contacto</h1> -->
                                    <!-- <p>No dude en ponerse en contacto con nosotros y nos pondremos en contacto con
                                        usted lo antes posible.</p> -->
                                    <p>Gracias por ponerse en contacto con nosotros, le contestaremos lo antes posible.</p>
                                </div>
                                <div class="col-lg-6">
                                    <label for="nombre" class="form-label">Nombre <span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre"
                                           id="nombre" aria-describedby="emailHelp" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="apellidos" class="form-label">Apellidos <span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Apellidos" id="apellidos"
                                           name="apellidos" aria-describedby="emailHelp" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="email" class="form-label">Correo electrónico <span
                                            style="color: red;">*</span></label>
                                    <input type="email" class="form-control" placeholder="email@ejemplo.com"
                                           name="email" id="email" aria-describedby="emailHelp" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="tel" class="form-label">Teléfono <span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="+34600854585" name="tel"
                                           id="tel" aria-describedby="emailHelp" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="empresa" class="form-label">Empresa <span
                                            style="color: red;">*</span></label>
                                    <input type="empresa" class="form-control" placeholder="Empresa"
                                           name="empresa" id="empresa" aria-describedby="empresaHelp" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="asunto" class="form-label">Asunto <span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" placeholder="Asunto" name="asunto"
                                           id="asunto" aria-describedby="asuntoHelp" required>
                                </div>
                                <div class="col-12">
                                    <label for="mensaje" class="form-label">Mensaje <span
                                            style="color: red;">*</span></label>
                                    <textarea name="mensaje" placeholder="Hola, escribe tu mensaje aqui,..."
                                              class="form-control" id="mensaje" rows="4" maxlength="240"
                                              required></textarea>
                                </div>

                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-brand" style="background-color: #293462; color: white;">Enviar</button>
                                    <!-- {{--                                    {!! Form::submit('Enviar', array('class'=>'btn btn-brand text-uppercase')) !!}--}} -->
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
