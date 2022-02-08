<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <x-main.header></x-main.header>
        <!-- Styles -->

    </head>
    
    <body>
        <x-main.preloader></x-main.preloader>
        <x-main.navbar></x-main.navbar>
        <x-blog.bannersectiondetailblog></x-blog.bannersectiondetailblog>
        <x-blog.mainsectiondetailblog></x-blog.mainsectiondetailblog>
        <x-main.footer></x-main.footer>
        <x-main.footerarea></x-main.footerarea>
        <x-main.copyarea></x-main.copyarea>

        <x-main.gotop></x-main.gotop>
        </div>
    </body>
</html>
