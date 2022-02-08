<style>
    .margin_center_form{
        margin: 0 auto;
    }
</style>
<section class="teacher-area pt-100 pb-70">
    <div class="container-fluid justify-content-center">
        <div class="row">
            <div class="col-lg-7 col-md-12  margin_center_form">
                <div class="contact-form">
                    <h3 class="newtitle">Deja tus datos</h3>

                    <form id="contactForm">
                        <input type="hidden" id="token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
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
            </div>
        </div>
    </div>
</section>




