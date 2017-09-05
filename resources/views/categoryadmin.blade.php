@extends('layouts.layoutadmin')

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
                        <li>Ladies</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/M'.'/PAKAIAN') }}">Men <span class="badge pull-right">{{$countmodelman}}</span></a>
                                    <ul>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/M'.'/PAKAIAN') }}">Clothing</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/M'.'/SEPATU') }}">Shoes</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/M'.'/ACC') }}">Accessories</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/M'.'/PAKAIAN') }}">Others</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="{{ url('categoryadmin/'.$showpaging.'/'.$page.'/'.$sortpaging.'/W'.'/PAKAIAN') }}">Ladies  <span class="badge pull-right">{{$countmodelwomen}}</span></a>
                                    <ul>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/W'.'/PAKAIAN') }}">Clothing</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/W'.'/SEPATU') }}">Shoes</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/W'.'/ACC') }}">Accessories</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/W'.'/PAKAIAN') }}">Others</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('categoryadmin/'.$showpaging.'/'.$page.'/'.$sortpaging.'/K'.'/PAKAIAN') }}">Kids  <span class="badge pull-right">{{$countmodelkids}}</span></a>
                                    <ul>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/K'.'/PAKAIAN') }}">Clothing</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/K'.'/SEPATU') }}">Shoes</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/K'.'/ACC') }}">Accessories</a>
                                        </li>
                                        <li><a href="{{ url('categoryadmin/'.$showpaging.'/1/'.$sortpaging.'/K'.'/PAKAIAN') }}">Others</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Brands <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Armani (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Versace (12)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Carlo Bruni (15)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Jack Honey (14)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Colours <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour white"></span> White (14)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour green"></span> Green (20)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour red"></span> Red (10)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="{{ URL::asset('../resources/assets/img/banner.jpg') }}" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>@if ($modelpaging==="M") Men
                        @elseif ($modelpaging==="W") Ladies 
                        @elseif ($modelpaging==="K") Kids
                        @else Man 
                        @endif</h1>
                        <p>In our @if ($modelpaging==="M") Men
                        @elseif ($modelpaging==="W") Ladies 
                        @elseif ($modelpaging==="K") Kids
                        @else Man 
                        @endif department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>{{$showpaging}}</strong> of <strong>{{$countproduk}}</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  
                                                <a href="{{ url('categoryadmin/6/1'.'/'.$sortpaging.'/'.$modelpaging.'/'.$kategoripaging) }}" class="btn btn-default btn-sm @if ($showpaging == "6") btn-primary @endif">6</a>  
                                                <a href="{{ url('categoryadmin/9/1'.'/'.$sortpaging.'/'.$modelpaging.'/'.$kategoripaging) }}" class="btn btn-default btn-sm @if ($showpaging == "9") btn-primary @endif">9</a>  
                                                <a href="{{ url('categoryadmin/12/1'.'/'.$sortpaging.'/'.$modelpaging.'/'.$kategoripaging) }}" class="btn btn-default btn-sm @if ($showpaging == "12") btn-primary @endif">12</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control" onchange="document.location.href = '' + this.value">
                                                    <option onchange="" value="price" @if ($sortpaging == "price") selected="selected"
                                                        @endif>Price</option>
                                                    <option value="name" @if ($sortpaging == "name") selected="selected"
                                                        @endif>Name</option>
                                                    <option value="id" @if ($sortpaging == "id") selected="selected"
                                                        @endif>Date</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">

                    @foreach($allproduk as $data)

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('detailadmin/'.$data->id) }}">
                                                <img src="{{ URL::asset('../image/'.$data->gambar1) }}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('detailadmin/'.$data->id) }}">
                                                <img src="{{ URL::asset('../image/'.$data->gambar2) }}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('detailadmin/'.$data->id) }}" class="invisible">
                                    <img src="{{ URL::asset('../image/'.$data->gambar1) }}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="{{ url('detailadmin/'.$data->id) }}">{{$data->judul}}</a></h3>
                                    <p class="price">${{$data->harga}}.00</p>
                                    <p class="buttons">
                                        <a href="{{ url('detailadmin/'.$data->id) }}" class="btn btn-default">View detail</a>
                                        <a href="{{ url('basketadmin') }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                    @endforeach

                        
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        {{-- <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="{{ url('categoryadmin/2') }}">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul> --}}

                        <ul class="pagination">
                            @for ($i = 1; $i <= ($countpaging); $i++)
                                <li><a href="{{ url('categoryadmin/'.$showpaging.'/'.$i.'/'.$sortpaging.'/'.$modelpaging.'/'.$kategoripaging) }}">{{$i}}</a>
                                </li>
                            @endfor
                        </ul>

                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection