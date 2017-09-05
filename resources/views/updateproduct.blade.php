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
                        <h1>Update Product</h1>

                        <!-- <p class="lead">Not our registered customer yet?</p> -->
                        <p>Silakan Update Product Disini</p>
                        <!-- <p class="text-muted">If you have any questions, please feel free to <a href="{{ url('contact') }}">contact us</a>, our customer service center is working for you 24/7.</p> -->

                        <hr>
                        @foreach($allproduk as $data)
                        <form name="foo" action="{{ url('updateproduct') }}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" id="id" name="id" value="{{$data->id}}" hidden>
                            </div>
                            <div class="form-group">
                                <label for="name">Judul</label> 
                                <input type="text" class="form-control" id="judul" name="judul" value="{{$data->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Pilih Model:</label>
                                    <select class="form-control" id="model" name="model">
                                    <option @if($data->model=='P') selected @endif value="P">Pria</option>
                                    <option @if($data->model=='W') selected @endif value="W">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Pilih Kategori:</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                    <option @if($data->kategori=='PAKAIAN') selected @endif value="PAKAIAN">Pakaian</option>
                                    <option @if($data->kategori=='SEPATU') selected @endif value="SEPATU">Sepatu</option>
                                    <option @if($data->kategori=='ACC') selected @endif value="ASESORIS">Asesoris</option>
                                    <option @if($data->kategori=='OTHERS') selected @endif value="LAIN">Lain Lain</option>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="name">Harga</label> 
                                <input type="text" class="form-control" id="harga" name="harga" value="{{$data->harga}}">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea type="textarea" class="form-control" id="keterangan" rows="5" name="keterangan">{!!$data->keterangan!!}</textarea>
                            </div>

                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <img src="{{ URL::asset($data->gambar1) }}" alt="" class="img-responsive" height="100" width="100">
                                    <div class="form-group">
                                        <label class="control-label">Select File Image 2</label>
                                        <input id="image1" type="file" class="file" name="image1">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <img src="{{ URL::asset($data->gambar2) }}" alt="" class="img-responsive" height="100" width="100">
                                    <div class="form-group">
                                        <label class="control-label">Select File Image 2</label>
                                        <input id="image2" type="file" class="file" name="image2">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <img src="{{ URL::asset($data->gambar3) }}" alt="" class="img-responsive" height="100" width="100">
                                    <div class="form-group">
                                        <label class="control-label">Select File Image 3</label>
                                        <input id="image3" type="file" class="file" name="image3">
                                    </div>
                                </div>
                            </div>                          
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Update</button>
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