@extends('layouts.layout')

@section('title')
    Add Product
@endsection

@section('content')

        <div id="content">
            <div class="container">

                <div class="col-sm-12">
                    <ul class="breadcrumb">

                        <li><a href="{{ url('index') }}">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>
                </div>

                <!-- *** LEFT COLUMN ***
		     _________________________________________________________ -->

                <div class="col-sm-9" id="blog-listing">

                    <ul class="breadcrumb">

                        <li><a href="#">Home</a>
                        </li>
                        <li>Blog listing</li>
                    </ul>


                    <div class="box">

                        <h1>Blog category name</h1>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

                    </div>

                    <div class="post">
                        <h2><a href="{{ url('post') }}">Fashion now</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="{{ url('post') }}"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="{{ url('post') }}"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="{{ url('post') }}">
                                <img src="../resources/assets/img/blog2.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="{{ url('post') }}" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>


                    <div class="post">
                        <h2><a href="{{ url('post') }}">Who is who - example blog post</a></h2>
                        <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                        </p>
                        <hr>
                        <p class="date-comments">
                            <a href="{{ url('post') }}"><i class="fa fa-calendar-o"></i> June 20, 2013</a>
                            <a href="{{ url('post') }}"><i class="fa fa-comment-o"></i> 8 Comments</a>
                        </p>
                        <div class="image">
                            <a href="{{ url('post') }}">
                                <img src="../resources/assets/img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>
                        <p class="read-more"><a href="{{ url('post') }}" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>

                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next disabled"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>



                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->


                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Blog</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="{{ url('blog') }}">About us</a>
                                </li>
                                <li class="active">
                                    <a href="{{ url('blog') }}">Fashion</a>
                                </li>
                                <li>
                                    <a href="{{ url('blog') }}">News and gossip</a>
                                </li>
                                <li>
                                    <a href="{{ url('blog') }}">Design</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="../resources/assets/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="{{ url('text') }}">About us</a>
                            </li>
                            <li><a href="{{ url('text') }}">Terms and conditions</a>
                            </li>
                            <li><a href="{{ url('faq') }}">FAQ</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="{{ url('register') }}">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Men</h5>

                        <ul>
                            <li><a href="{{ url('category') }}">T-shirts</a>
                            </li>
                            <li><a href="{{ url('category') }}">Shirts</a>
                            </li>
                            <li><a href="{{ url('category') }}">Accessories</a>
                            </li>
                        </ul>

                        <h5>Ladies</h5>
                        <ul>
                            <li><a href="{{ url('category') }}">T-shirts</a>
                            </li>
                            <li><a href="{{ url('category') }}">Skirts</a>
                            </li>
                            <li><a href="{{ url('category') }}">Pants</a>
                            </li>
                            <li><a href="{{ url('category') }}">Accessories</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Obaju Ltd.</strong>
                            <br>13/25 New Avenue
                            <br>New Heaven
                            <br>45Y 73J
                            <br>England
                            <br>
                            <strong>Great Britain</strong>
                        </p>

                        <a href="{{ url('contact') }}">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        @endsection