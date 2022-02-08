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
