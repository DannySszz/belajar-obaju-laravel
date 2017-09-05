@extends('layouts.layout')

@section('title')
    Add Product
@endsection

@section('content')
        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="{{ url('index') }}">Home</a>
                        </li>
                        <li>My wishlist</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="{{ url('customer-orders') }}"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                <li>
                                    <a href="{{ url('customer-wishlist') }}"><i class="fa fa-heart"></i> My wishlist</a>
                                </li>
                                <li>
                                    <a href="{{ url('customer-account') }}"><i class="fa fa-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="{{ url('index') }}"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="wishlist">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Ladies</li>
                    </ul>

                    <div class="box">
                        <h1>My wishlist</h1>
                        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>

                    <div class="row products">

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">White Blouse Armani</a></h3>
                                    <p class="price"><del>$280</del> $143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">White Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">Fur coat</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">White Blouse Armani</a></h3>
                                    <p class="price"><del>$280</del> $143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detail') }}">
                                                <img src="../resources/assets/img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detail') }}" class="invisible">
                                    <img src="../resources/assets/img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detail') }}">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detail') }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basket') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                    </div>
                    <!-- /.products -->

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