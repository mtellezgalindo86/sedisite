<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <h3 class="newtitle">Deja tus datos</h3>

                    <form id="contactForm">


                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Por favor ingresa tu nombre" placeholder="Por favor ingresa tu nombre">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Por favor ingresa tu email" placeholder="Por favor ingresa tu email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" class="form-control" required data-error="Por favor ingresa tu telefono" placeholder="Por favor ingresa tu telefono">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="5" required data-error="Por favor ingresa tu mensaje" class="form-control" placeholder="Escribe tu mensaje..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Enviar</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="contact-information">
                    <h3 class="newtitle">Nuestros planteles</h3>

                    <ul class="contact-list text-blue-sedi">

                        <li><i class='bx bx-map'></i> Lugar: <span>Explanada No. 305,<br> Col. Lomas de Chapultepec,<br> Alcaldía Miguel Hidalgo,<br> CP 11000, CDMX.</span></li>
                        <li><i class='bx bx-phone-call'></i> Llamar: <a href="tel:+525555202788">55-20-27-88</a></li>
                        <li><i class='bx bx-phone-call'></i> Llamar: <a href="tel:+525552029647">52-02-96-47</a></li>
                        <li><i class='bx bx-envelope'></i> Nuestro correo: <a href="mailto:contacto@sedi.edu.mx">contacto@sedi.edu.mx</a></li>
                        <li>
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.703841200537!2d-99.21353388466092!3d19.42519804594993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201f4c7d526f1%3A0x6c9524fe510dfa33!2sSEDI%20Lomas!5e0!3m2!1ses-419!2smx!4v1637628177957!5m2!1ses-419!2smx"></iframe>
                            </div>
                        </li>
                    </ul>

                    <ul class="contact-list text-blue-sedi">
                        <li><i class='bx bx-map'></i> Lugar: <span>Circuito Guillermo González <br>
                            Camarena No. 1000-002(PB)<br>
                            Col. Centro de Ciudad Santa Fe<br>
                            Alcaldía Álvaro Obregón<br>
                            CP 01210, CDMX.</span></li>
                        <li><i class='bx bx-phone-call'></i> Llamar: <a href="tel:+525552923596">52-92-35-96</a></li>
                        <li><i class='bx bx-phone-call'></i> Llamar: <a href="tel:+525552923895"> 52-92-38-95</a></li>
                        <li><i class='bx bx-envelope'></i> Nuestro correo: <a href="mailto:contacto@sedi.edu.mx">contacto@sedi.edu.mx</a></li>
                        <li>
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15056.235596402175!2d-99.2638533!3d19.3666022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55d3025b11fc37e1!2sSEDI%20Santa!5e0!3m2!1ses-419!2smx!4v1637628106050!5m2!1ses-419!2smx"></iframe>
                            </div>

                        </li>
                    </ul>

                    <h3 class="newtitle">Horario de atención:</h3>
                    <ul class="opening-hours text-blue-sedi">
                        <li><span>Lunes:</span> 7AM - 7:45PM</li>
                        <li><span>Martes:</span>  7AM - 7:45PM</li>
                        <li><span>Miercoles:</span>  7AM - 7:45PM</li>
                        <li><span>Jueves:</span>  7AM - 7:45PM</li>
                        <li><span>Viernes:</span> 7AM - 7:45PM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




