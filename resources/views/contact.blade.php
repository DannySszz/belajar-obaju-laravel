@extends('layouts.layout')

@section('title')
    Add Product
@endsection

@section('content')
        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Pages</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="{{ url('text') }}">Text page</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}">Contact page</a>
                                </li>
                                <li>
                                    <a href="{{ url('faq') }}">FAQ</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->


                    <div class="banner">
                        <a href="#">
                            <img src="../resources/assets/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">


                    <div class="box" id="contact">
                        <h1>Contact</h1>

                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>13/25 New Avenue
                                    <br>New Heaven
                                    <br>45Y 73J
                                    <br>England
                                    <br>
                                    <strong>Great Britain</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+33 555 444 333</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                                <ul>
                                    <li><strong><a href="mailto:">info@fakeemail.com</a></strong>
                                    </li>
                                    <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>

                        <div id="map">

                        </div>

                        <hr>
                        <h2>Contact form</h2>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" id="firstname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>


                    </div>


                </div>
                <!-- /.col-md-9 -->
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