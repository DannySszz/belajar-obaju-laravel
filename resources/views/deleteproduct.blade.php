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
                        <li>Add Product</li>
                    </ul>

                </div>

                <div class="col-md-12">
                    <div class="box">
                        <h1>Delete Product</h1>

                        <!-- <p class="lead">Not our registered customer yet?</p> -->
                        <p>Silakan Delete Product Disini</p>
                        <!-- <p class="text-muted">If you have any questions, please feel free to <a href="{{ url('contact') }}">contact us</a>, our customer service center is working for you 24/7.</p> -->

                        <hr>
                        @foreach($allproduk as $data)
                        <form name="foo" action="{{ url('deleteproduct') }}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" id="id" name="id" value="{{$data->id}}" hidden>
                            </div>
                            <div class="form-group">
                                <label for="name">Judul</label> 
                                <input type="text" class="form-control" id="judul" name="judul" value="{{$data->judul}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Pilih Model:</label>
                                    <select class="form-control" id="model" name="model" disabled>
                                    <option @if($data->model=='P') selected @endif value="P">Pria</option>
                                    <option @if($data->model=='W') selected @endif value="W">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Pilih Kategori:</label>
                                    <select class="form-control" id="kategori" name="kategori" disabled>
                                    <option @if($data->kategori=='PAKAIAN') selected @endif value="PAKAIAN">Pakaian</option>
                                    <option @if($data->kategori=='SEPATU') selected @endif value="SEPATU">Sepatu</option>
                                    <option @if($data->kategori=='ACC') selected @endif value="ASESORIS">Asesoris</option>
                                    <option @if($data->kategori=='OTHERS') selected @endif value="LAIN">Lain Lain</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="name">Harga</label> 
                                <input type="text" class="form-control" id="harga" name="harga" value="{{$data->harga}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                {!!$data->keterangan!!}
                            </div>
                            <div class="row" id="thumbs">
                                <div class="col-xs-2">
                                    <img src="{{ URL::asset($data->gambar1) }}" alt="" class="img-responsive" height="100" width="100">
                                </div>
                                <div class="col-xs-2">
                                    <img src="{{ URL::asset($data->gambar1) }}" alt="" class="img-responsive" height="100" width="100">
                                </div>
                                <div class="col-xs-2">
                                    <img src="{{ URL::asset($data->gambar1) }}" alt="" class="img-responsive" height="100" width="100">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Delete</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection