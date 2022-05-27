<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {!! SEO::generate() !!}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <x-main.header></x-main.header>
        <!-- Styles -->

    </head>
    <body>
        <div  id="popups">
            <div id="small-dialog" class="zoom-anim-dialog mfp-hide text-center" style="background-color:white">
                
                <img src="assets/img/banners/curso_de_verano.jpeg" width="60%"  alt="">    
                <div class="option-item pt-5">
                    <a href="informacion/Bienvenida_e_introduccion_Curso_de_Verano_2022.pdf" class="default-btn">Ver más</a>
                </div>
            </div>
            <div id="small-dialog-after" class="zoom-anim-dialog mfp-hide text-center" style="background-color:white">
            
                <img src="assets/img/banners/after_school.jpeg" width="60%"  alt="">    
                <div class="option-item pt-5">
                    <a href="informacion/Afterschool_Clientes_Potenciales.pdf" class="default-btn">Ver más</a>
                </div>
            </div>
        </div>

        <x-main.preloader></x-main.preloader>
        <x-main.navbar></x-main.navbar>
        <x-main.mainbannerarea></x-main.mainbannerarea>
        <x-main.covid></x-main.covid>
        <x-main.whoweare></x-main.whoweare>
        <x-main.classarea></x-main.classarea>
        <x-main.valuearea></x-main.valuearea>
        <x-main.teacherarea></x-main.teacherarea>
        <x-main.contacto></x-main.contacto>
        {{--<x-main.testimoneal></x-main.testimoneal>
            <x-main.eventarea></x-main.eventarea>
            <x-main.blogarea></x-main.blogarea> --}}
        <x-main.footerarea></x-main.footerarea>
        <x-main.copyarea></x-main.copyarea>
        <x-main.gotop></x-main.gotop>
        <x-main.footer></x-main.footer>
        </div>
    </body>
</html>
