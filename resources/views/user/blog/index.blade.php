@extends('user.master')
@section('content')
    <div class="main-wrapper">

        <div class="sub_header bg_1">
            <div id="intro_txt">
                <h1>Atena <strong>Blog</strong> page</h1>
                <p>Ex saepe accusata duo, vel ne summo option delenit.</p>
            </div>
        </div> <!--End sub_header -->

        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="{{route('dashboard')}}">Home</a></li>
                </ul>
            </div>
        </div><!-- Position -->

        <div class="container_gray_bg">
            <div class="container margin_60">
                <div class="row">

                    <div class="col-md-9">
                        <div class="post">
                            <a href="{{asset('blog')}}" ><img src="{{asset('img/blog-1.jpg')}}" alt="" class="img-responsive"></a>
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>12/05/2015 <em>by Mark</em></li>
                                        <li><i class="icon-inbox-alt"></i><a href="{{asset('blog')}}">Category</a></li>
                                        <li><i class="icon-tags"></i><a href="{{asset('blog')}}">Works</a>, <a href="blog.html#">Personal</a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="{{asset('blog')}}">25 </a></div>
                            </div>
                            <h2>Duis aute irure dolor in reprehenderit</h2>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <a href="blog_post.html" class="button" >Read more</a>
                        </div><!-- end post -->

                        <div class="post">
                            <a href="blog_post.html" ><img src="img/blog-2.jpg" alt="" class="img-responsive"></a>
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>12/05/2015 <em>by Mark</em></li>
                                        <li><i class="icon-inbox-alt"></i><a href="blog.html#">Category</a></li>
                                        <li><i class="icon-tags"></i><a href="blog.html#">Works</a>, <a href="blog.html#">Personal</a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="blog.html#">25 </a></div>
                            </div>
                            <h2>Duis aute irure dolor in reprehenderit</h2>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <a href="blog_post.html" class="button" >Read more</a>
                        </div><!-- end post -->

                        <div class="post">
                            <a href="blog_post.html" ><img src="img/blog-3.jpg" alt="" class="img-responsive"></a>
                            <div class="post_info clearfix">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i>12/05/2015 <em>by Mark</em></li>
                                        <li><i class="icon-inbox-alt"></i><a href="blog.html#">Category</a></li>
                                        <li><i class="icon-tags"></i><a href="blog.html#">Works</a>, <a href="blog.html#">Personal</a></li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="blog.html#">25 </a></div>
                            </div>
                            <h2>Duis aute irure dolor in reprehenderit</h2>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <a href="blog_post.html" class="button" >Read more</a>
                        </div><!-- end post -->


                        <div class="text-center">
                            <ul class="pagination">
                                <li><a href="blog.html#">Prev</a></li>
                                <li class="active"><a href="blog.html#">1</a></li>
                                <li><a href="blog.html#">2</a></li>
                                <li><a href="blog.html#">3</a></li>
                                <li><a href="blog.html#">4</a></li>
                                <li><a href="blog.html#">5</a></li>
                                <li><a href="blog.html#">Next</a></li>
                            </ul><!-- end pagination-->
                        </div>
                    </div><!-- End col-md-8-->

                    <aside class="col-md-3" id="sidebar">

                        <div class="widget">
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <input type="text" class="form-control input-lg" placeholder="Search" />
                                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="icon-search-1"></i>
                        </button>
                    </span>
                                </div>
                            </div>
                        </div><!-- End Search -->
                        <hr>
                        <div class="widget">
                            <h4>Categories</h4>
                            <ul id="cat_nav">
                                <li><a href="blog.html#">News</a></li>
                                <li><a href="blog.html#">Events</a></li>
                                <li><a href="blog.html#">Tutorials</a></li>
                                <li><a href="blog.html#">Posted by staff</a></li>
                            </ul>
                        </div><!-- End widget -->

                        <hr>

                        <div class="widget">
                            <h4>Recent post</h4>
                            <ul class="recent_post">
                                <li>
                                    <i class="icon-calendar-empty"></i> 16th July, 2020
                                    <div><a href="blog.html#">It is a long established fact that a reader will be distracted </a></div>
                                </li>
                                <li>
                                    <i class="icon-calendar-empty"></i> 16th July, 2020
                                    <div><a href="blog.html#">It is a long established fact that a reader will be distracted </a></div>
                                </li>
                                <li>
                                    <i class="icon-calendar-empty"></i> 16th July, 2020
                                    <div><a href="blog.html#">It is a long established fact that a reader will be distracted </a></div>
                                </li>
                            </ul>
                        </div><!-- End widget -->
                        <hr>
                        <div class="widget tags">
                            <h4>Tags</h4>
                            <a href="blog.html#">Lorem ipsum</a>
                            <a href="blog.html#">Dolor</a>
                            <a href="blog.html#">Long established</a>
                            <a href="blog.html#">Sit amet</a>
                            <a href="blog.html#">Latin words</a>
                            <a href="blog.html#">Excepteur sint</a>
                        </div><!-- End widget -->

                    </aside><!-- End aside -->

                </div><!-- End row-->
            </div><!-- End container -->
        </div><!--End container_gray_bg -->

        <div class=" container_gray_line" id="newsletter_container">
            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3>Subscribe to our Newsletter for latest news.</h3>
                        <div id="message-newsletter"></div>
                        <form method="post" action="http://www.ansonika.com/atena/assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                            <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="E-Poçt" class="form-control">
                            <button id="submit-newsletter" class="button"> Göndər</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End newsletter_container -->


    </div> <!-- main-wrapper -->
@endsection
