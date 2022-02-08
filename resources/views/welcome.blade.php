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
