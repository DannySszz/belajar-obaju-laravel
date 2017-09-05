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
@endsection