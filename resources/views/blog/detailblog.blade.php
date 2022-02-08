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
        <section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src="assets/img/blog-details.jpg" alt="image">
                    </div>

                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <span>Posted On:</span>
                                    <a href="#">September 31, 2021</a>
                                </li>
                                <li>
                                    <span>Posted By:</span>
                                    <a href="#">John Anderson</a>
                                </li>
                            </ul>
                        </div>

                        <h3>Determining The True Goal of Good Education is Difficult.</h3>
                        <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                        <blockquote class="wp-block-quote">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </blockquote>

                        <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>

                        <ul class="wp-block-gallery columns-3">
                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="assets/img/blog/blog-4.jpg" alt="image">
                                </figure>
                            </li>

                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="assets/img/blog/blog-5.jpg" alt="image">
                                </figure>
                            </li>

                            <li class="blocks-gallery-item">
                                <figure>
                                    <img src="assets/img/blog/blog-6.jpg" alt="image">
                                </figure>
                            </li>
                        </ul>
                        <h3>Four Major Elements That We Offer:</h3>
                        <ul class="features-list">
                            <li>
                                <i class='bx bx-check'></i>
                                Your child’s interests, likes, dislikes
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                Their routines- patterns of eating, sleeping, toileting
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                Your child’s current wellbeing
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                Any major events taking place at home.
                            </li>
                        </ul>
                        <h3>It’s Time To Think Differently About Homeschooling</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>

                    <div class="article-footer">
                        <div class="article-tags">
                            <span>
                                <i class='bx bxs-bookmark'></i>
                            </span>
                            <a href="#">Preschool</a>,
                            <a href="#">Children</a>
                        </div>

                        <div class="article-share">
                            <ul class="social">
                                <li><span>Share:</span></li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="post-navigation">
                        <div class="navigation-links">
                            <div class="nav-previous">
                                <a href="index.html">
                                    <i class='bx bx-chevron-left'></i>
                                    Prev Post
                                </a>
                            </div>
                            <div class="nav-next">
                                <a href="index.html">
                                    Next Post
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="comments-area">
                        <h3 class="comments-title">3 Comments:</h3>

                        <ol class="comment-list">
                            <li class="comment">
                                <div class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="assets/img/client/client-1.jpg" class="avatar" alt="image">
                                            <b class="fn">John Jones</b>
                                        </div>
                                        <div class="comment-metadata">
                                            <a href="#">
                                                <span>April 24, 2021 at 10:59 am</span>
                                            </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                    </div>
                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="assets/img/client/client-2.jpg" class="avatar" alt="image">
                                                    <b class="fn">Steven Smith</b>
                                                </div>
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <span>April 24, 2021 at 10:59 am</span>
                                                    </a>
                                                </div>
                                            </footer>
                                            <div class="comment-content">
                                                <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                            </div>
                                            <div class="reply">
                                                <a href="#" class="comment-reply-link">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>

                                <div class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author vcard">
                                            <img src="assets/img/client/client-3.jpg" class="avatar" alt="image">
                                            <b class="fn">Sarah Taylor</b>
                                        </div>
                                        <div class="comment-metadata">
                                            <a href="#">
                                                <span>April 24, 2021 at 10:59 am</span>
                                            </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
                                    </div>
                                    <div class="reply">
                                        <a href="#" class="comment-reply-link">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply</h3>

                            <form class="comment-form">
                                <p class="comment-notes">
                                    <span id="email-notes">Your email address will not be published.</span>
                                    Required fields are marked
                                    <span class="required">*</span>
                                </p>
                                <p class="comment-form-author">
                                    <label>Name <span class="required">*</span></label>
                                    <input type="text" id="author" placeholder="Your Name*" name="author" required="required">
                                </p>
                                <p class="comment-form-email">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email" id="email" placeholder="Your Email*" name="email" required="required">
                                </p>
                                <p class="comment-form-url">
                                    <label>Website</label>
                                    <input type="url" id="url" placeholder="Website" name="url">
                                </p>
                                <p class="comment-form-comment">
                                    <label>Comment</label>
                                    <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
                                </p>
                                <p class="comment-form-cookies-consent">
                                    <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                    <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">
                    <section class="widget widget_search">
                        <h3 class="widget-title">Search</h3>

                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </form>
                    </section>

                    <section class="widget widget_ketan_posts_thumb">
                        <h3 class="widget-title">Posts Recientes</h3>

                        @foreach ($recent_posts as $recent_post )
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img">
                                        <img src="{{$recent_post->image->path}}" alt="">
                                    </span>
                                </a>
                                <div class="info">
                                    <span>{{$recent_post->created_at->diffForHumans()}}</span>
                                    <h4 class="title usmall"><a href="#">{{$recent_post->title}}</a></h4>
                                </div>
                            </article>
                        @endforeach
                    </section>

                    <section class="widget widget_categories">
                        <h3 class="widget-title">Categorias</h3>

                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="#">{{$category->name}}</a></li>    
                            @endforeach
                        </ul>
                    </section>

                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>

                        <div class="tagcloud">
                            @foreach ($tags as $tag)
                             <a href="#">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </section>
                </aside>
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
