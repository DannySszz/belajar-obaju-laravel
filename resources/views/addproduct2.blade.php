<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="{{ URL::asset('../resources/assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../resources/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../resources/assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../resources/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('../resources/assets/css/owl.theme.css') }}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{ URL::asset('../resources/assets/css/style.default.css') }}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{ URL::asset('../resources/assets/css/custom.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('../resources/assets/js/respond.min.js') }}"></script>

    <link rel="shortcut icon" href="{{ URL::asset('../resources/view/favicon.png') }}">



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="{{ url('register') }}">Register</a>
                    </li>
                    <li><a href="{{ url('contact') }}">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('customer-orders') }}" method="post"> {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="{{ url('register') }}"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="{{ url('index') }}" data-animate-hover="bounce">
                    <img src="../resources/assets/img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="../resources/assets/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="{{ url('basket') }}">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="{{ url('index') }}">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Men <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">T-shirts</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Shirts</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Pants</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">Trainers</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Sandals</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">Trainers</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Sandals</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Casual</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Featured</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">Trainers</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Sandals</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">Trainers</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Sandals</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Ladies <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">T-shirts</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Shirts</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Pants</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">Trainers</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Sandals</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">Trainers</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Sandals</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Casual</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Casual</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="{{ url('category') }}">Trainers</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Sandals</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Hiking shoes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="../resources/assets/img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="../resources/assets/img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="{{ url('index') }}">Homepage</a>
                                                </li>
                                                <li><a href="{{ url('category') }}">Category - sidebar left</a>
                                                </li>
                                                <li><a href="{{ url('category-right') }}">Category - sidebar right</a>
                                                </li>
                                                <li><a href="{{ url('category-full') }}">Category - full width</a>
                                                </li>
                                                <li><a href="{{ url('detail') }}">Product detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="{{ url('register') }}">Register / login</a>
                                                </li>
                                                <li><a href="{{ url('customer-orders') }}">Orders history</a>
                                                </li>
                                                <li><a href="{{ url('customer-order') }}">Order history detail</a>
                                                </li>
                                                <li><a href="{{ url('customer-wishlist') }}">Wishlist</a>
                                                </li>
                                                <li><a href="{{ url('customer-account') }}">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="{{ url('basket') }}">Shopping cart</a>
                                                </li>
                                                <li><a href="{{ url('checkout1') }}">Checkout - step 1</a>
                                                </li>
                                                <li><a href="{{ url('checkout2') }}">Checkout - step 2</a>
                                                </li>
                                                <li><a href="{{ url('checkout3') }}">Checkout - step 3</a>
                                                </li>
                                                <li><a href="{{ url('checkout4') }}">Checkout - step 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="{{ url('blog') }}">Blog listing</a>
                                                </li>
                                                <li><a href="{{ url('post') }}">Blog Post</a>
                                                </li>
                                                <li><a href="{{ url('faq') }}">FAQ</a>
                                                </li>
                                                <li><a href="{{ url('text') }}">Text page</a>
                                                </li>
                                                <li><a href="{{ url('text-right') }}">Text page - right sidebar</a>
                                                </li>
                                                <li><a href="{{ url('404') }}">404 page</a>
                                                </li>
                                                <li><a href="{{ url('contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="{{ url('basket') }}" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Add Product</li>
                    </ul>

                </div>

                <div class="col-md-12">
                    <div class="box">
                        <h1>New Product</h1>

                        <!-- <p class="lead">Not our registered customer yet?</p> -->
                        <p>Silakan Input Product Baru Disini</p>
                        <!-- <p class="text-muted">If you have any questions, please feel free to <a href="{{ url('contact') }}">contact us</a>, our customer service center is working for you 24/7.</p> -->

                        <hr>

                        <form action="{{ url('save_product') }}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Judul</label> 
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Pilih Model:</label>
                                    <select class="form-control" id="model" name="model">
                                    <option value="P">Pria</option>
                                    <option value="W">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Pilih Kategori:</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                    <option value="PAKAIAN">Pakaian</option>
                                    <option value="SEPATU">Sepatu</option>
                                    <option value="ASESORIS">Asesoris</option>
                                    <option value="LAIN">Lain Lain</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="name">Harga</label> 
                                <input type="text" class="form-control" id="harga" name="harga">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea type="textarea" class="form-control" id="keterangan" rows="5" name="keterangan"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Select File Image 1</label>
                                <input id="image1" type="file" class="file" name="image1">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Select File Image 2</label>
                                <input id="image2" type="file" class="file" name="image2">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Select File Image 3</label>
                                <input id="image3" type="file" class="file" name="image3">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Save</button>
                            </div>
                        </form>
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
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="../resources/assets/js/jquery-1.11.0.min.js"></script>
    <script src="../resources/assets/js/bootstrap.min.js"></script>
    <script src="../resources/assets/js/jquery.cookie.js"></script>
    <script src="../resources/assets/js/waypoints.min.js"></script>
    <script src="../resources/assets/js/modernizr.js"></script>
    <script src="../resources/assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="../resources/assets/js/owl.carousel.min.js"></script>
    <script src="../resources/assets/js/front.js"></script>



</body>

</html>
