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
        <x-videoteca.videotecamain></x-videoteca.videotecamain>
        <section class="who-we-are ptb-100">
            <style>
                .video-description{
                    width : 50%;
                    overflow:hidden;
                    display:inline-block;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }

            </style>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <h3>Videoteca</h3>

                        </div>
                    </div>

                    <div class="row">

                    @foreach($videos as $video)
                            <div class="col-lg-6 col-md-5 offset-lg-0 ">
                                <div class="single-class">
                                    <div class="class-image h-30">
                                        <iframe width="100%" height="340"
                                            src="https://www.youtube.com/embed/{{$video["idvideo"]}}?controls=1">
                                        </iframe>
                                    </div>

                                    <div class="class-content h-100">
                                        <h4>
                                            <a href="#">{{$video["title"]}}</a>
                                        </h4>
                                        <p>{{$video["description"]}}</p>
                                        <div class="class-btn">
                                            <a href="https://www.youtube.com/watch?v={{$video["idvideo"]}}" target="_blank" class="default-btn">Ver mas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <x-main.footer></x-main.footer>
        <x-main.footerarea></x-main.footerarea>
        <x-main.copyarea></x-main.copyarea>
        <x-main.gotop></x-main.gotop>
        </div>
    </body>
</html>
