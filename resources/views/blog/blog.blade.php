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
    <x-blog.bannermainblog ></x-blog.bannermainblog>
    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2><label class="newtitle">Nuestro Blog</label></h2>
            </div>
            <div class="row">
                @if (!count($posts))
                    <h4><label class="newtitle">No hay post por mostrar</label></h4>
                @else
                    @foreach ($posts as $post)
                    @php
                        print_r($post);
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="blog-image">
                                <a href="{{route('posts.show',  $post)}}">
                                    <img src="{{asset('storage/'.$post->image->path.'')}}" alt="image">
                                </a>
                            </div>

                            <div class="blog-content">
                                <ul class="post-meta">
                                    <li>
                                        <span>Escrito:</span>
                                        <a href="#">{{$post->author->name}}</a>
                                    </li>
                                    <li>
                                        <span>Fecha:</span>
                                        {{$post->created_at}}
                                    </li>
                                </ul>
                                <h3>
                                    <a href="#">{{\Str::limit($post->title, 20)}}</a>
                                </h3>
                                <p>{{\Str::limit($post->excerpt, 30)}}</p>

                                <div class="blog-btn">
                                    <a href="{{route('posts.show', $post)}}" class="default-btn">Leer...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                     {{$posts->links()}}
                @endif

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
