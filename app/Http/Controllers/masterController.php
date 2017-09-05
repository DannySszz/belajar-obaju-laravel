<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
//use \Input as Input;

class masterController extends Controller
{
    public function show($id)
    {
    	//$id=1;
    	$master=master::find($id);
    	$saranproduk=master::take(3)->orderBy('harga', 'asc')->get();
    	$mviewproduk=master::take(3)->orderBy('judul', 'desc')->get();

        return view ('detail')
        ->with('saranproduk',$saranproduk)
        ->with('mviewproduk',$mviewproduk)
        ->with('master',$master);
    }

    public function showadmin($id)
    {
        //$id=1;
        $master=master::find($id);
        $saranproduk=master::take(3)->orderBy('harga', 'asc')->get();
        $mviewproduk=master::take(3)->orderBy('judul', 'desc')->get();

        return view ('detailadmin')
        ->with('saranproduk',$saranproduk)
        ->with('mviewproduk',$mviewproduk)
        ->with('master',$master);
    }

    public function showhome()
    {
    	//$id=1;
    	//$master=master::find($id);
    	$hotproduk=master::take(10)->orderBy('harga', 'asc')->get();
    	//$mviewproduk=master::take(3)->orderBy('judul', 'desc')->get();

        return view ('home')
        //->with('saranproduk',$saranproduk)
        //->with('mviewproduk',$mviewproduk)
        ->with('hotproduk',$hotproduk); 


        // ->with('id',$id)
        // ->with('judul',$judul)
        // ->with('keterangan',$keterangan)
        // ->with('harga',$harga)
        // ->with('gambar1',$gambar1)
        // ->with('gambar2',$gambar2)
        // ->with('gambar3',$gambar3);
    }

    public function showhomeadmin(Request $req)
    {
        //$id=1;
        //$master=master::find($id);
        $hotproduk=master::take(10)->orderBy('harga', 'asc')->get();
        //$mviewproduk=master::take(3)->orderBy('judul', 'desc')->get();

        return view ('homeadmin')
        //->with('saranproduk',$saranproduk)
        //->with('mviewproduk',$mviewproduk)
        ->with('hotproduk',$hotproduk); 


        // ->with('id',$id)
        // ->with('judul',$judul)
        // ->with('keterangan',$keterangan)
        // ->with('harga',$harga)
        // ->with('gambar1',$gambar1)
        // ->with('gambar2',$gambar2)
        // ->with('gambar3',$gambar3);
    }

    public function showCategory($show,$page,$sortpaging,$modelpaging,$kategoripaging)
    {

        $sort1='';
        $sort2='';
        if($sortpaging=='price'){
            $sort1='harga';
            $sort2='asc';
        }else if($sortpaging=='name'){
            $sort1='judul';
            $sort2='asc';
        }else if($sortpaging=='id'){
            $sort1='id';
            $sort2='asc';
        }else{
            $sort1='harga';
            $sort2='asc';
        }

        if($show!='6'&&$show!='9'&&$show!='12'){
            $show=6;
        }

        if($modelpaging!='M'&&$modelpaging!='W'&&$modelpaging!='K'){
            $modelpaging='M';
        }

        if($kategoripaging!='PAKAIAN'&&$kategoripaging!='SEPATU'&&$kategoripaging!='ACC'){
            $kategoripaging='PAKAIAN';
        }

        //get data master
    	$n1=($show*($page-1))-$page+1;
    	if($page==1){
			$allproduk=master::take($show)->orderBy($sort1, $sort2)
            ->where('model', '=', $modelpaging)
            ->where('kategori', '=', $kategoripaging)
            ->get();
    	}else{
    		$allproduk=master::skip($n1)->take($show)->orderBy($sort1, $sort2)->where('Model', '=', $modelpaging)->get();
    	}

        //count data
    	$countproduk=DB::table('masters')
        ->where('model', '=', $modelpaging)
        ->where('kategori', '=', $kategoripaging)
        ->count();
    	$countpaging=(floor($countproduk/$show)+1);

        $showpaging=$show;

        //get n data per model
        $countmodelman=DB::table('masters')->where('model', '=', 'M')->count();
        $countmodelwomen=DB::table('masters')->where('model', '=', 'W')->count();
        $countmodelkids=DB::table('masters')->where('model', '=', 'K')->count();

        return view ('category')
        ->with('allproduk',$allproduk)
        ->with('countproduk',$countproduk)
        ->with('countpaging',$countpaging)
        ->with('showpaging',$showpaging)
        ->with('page',$page)
        ->with('sortpaging',$sortpaging)
        ->with('countmodelman',$countmodelman)
        ->with('countmodelwomen',$countmodelwomen)
        ->with('countmodelkids',$countmodelkids)
        ->with('modelpaging',$modelpaging)
        ->with('kategoripaging',$kategoripaging);
    }

    public function showCategoryadmin($show,$page,$sortpaging,$modelpaging,$kategoripaging)
    {

        $sort1='';
        $sort2='';
        if($sortpaging=='price'){
            $sort1='harga';
            $sort2='asc';
        }else if($sortpaging=='name'){
            $sort1='judul';
            $sort2='asc';
        }else if($sortpaging=='id'){
            $sort1='id';
            $sort2='asc';
        }else{
            $sort1='harga';
            $sort2='asc';
        }

        if($show!='6'&&$show!='9'&&$show!='12'){
            $show=6;
        }

        if($modelpaging!='M'&&$modelpaging!='W'&&$modelpaging!='K'){
            $modelpaging='M';
        }

        if($kategoripaging!='PAKAIAN'&&$kategoripaging!='SEPATU'&&$kategoripaging!='ACC'){
            $kategoripaging='PAKAIAN';
        }

        //get data master
        $n1=($show*($page-1))-$page+1;
        if($page==1){
            $allproduk=master::take($show)->orderBy($sort1, $sort2)
            ->where('model', '=', $modelpaging)
            ->where('kategori', '=', $kategoripaging)
            ->get();
        }else{
            $allproduk=master::skip($n1)->take($show)->orderBy($sort1, $sort2)->where('Model', '=', $modelpaging)->get();
        }

        //count data
        $countproduk=DB::table('masters')
        ->where('model', '=', $modelpaging)
        ->where('kategori', '=', $kategoripaging)
        ->count();
        $countpaging=(floor($countproduk/$show)+1);

        $showpaging=$show;

        //get n data per model
        $countmodelman=DB::table('masters')->where('model', '=', 'M')->count();
        $countmodelwomen=DB::table('masters')->where('model', '=', 'W')->count();
        $countmodelkids=DB::table('masters')->where('model', '=', 'K')->count();

        return view ('categoryadmin')
        ->with('allproduk',$allproduk)
        ->with('countproduk',$countproduk)
        ->with('countpaging',$countpaging)
        ->with('showpaging',$showpaging)
        ->with('page',$page)
        ->with('sortpaging',$sortpaging)
        ->with('countmodelman',$countmodelman)
        ->with('countmodelwomen',$countmodelwomen)
        ->with('countmodelkids',$countmodelkids)
        ->with('modelpaging',$modelpaging)
        ->with('kategoripaging',$kategoripaging);
    }


    public function login(Request $req){
        $email=$req->email;
        $password=$req->password;

        if($email=="ADMINSHIKA"){
            return redirect('/indexadmin');
        }else{
            return view('customer-orders');
        }

        
    }

    public function save_product(Request $req){

        $lastid = master::orderby('id','desc')->take(1)->value('id');
        $lastid=$lastid+1;
        //$nama = $lastid;
        $master = new master;

        if(Input::hasFile('image1')){

            $file = Input::file('image1');
            $nameImage = $lastid.'_1_'.$file->getClientOriginalName();          
            $file->move('uploads',$nameImage);

            $master->gambar1 = 'uploads'.$lastid.'_'.$req->image1;
            
        }

        if(Input::hasFile('image2')){

            $file = Input::file('image2');
            $nameImage = $lastid.'_2_'.$file->getClientOriginalName();          
            $file->move('uploads',$nameImage);

            $master->gambar2 = 'uploads'.$lastid.'_'.$req->image2;
            
        }

        if(Input::hasFile('image3')){

            $file = Input::file('image3');
            $nameImage = $lastid.'_3_'.$file->getClientOriginalName();          
            $file->move('uploads',$nameImage);

            $master->gambar3 = 'uploads'.$lastid.'_'.$req->image3;
            
        }

        // 'id', 'judul', 'keterangan','harga', 'gambar1','gambar2', 'gambar3', 'new','sale', 'gift','model','kategori'
        $master->judul = $req->judul;
        $master->keterangan = $req->keterangan;
        $master->harga = $req->harga;
        // $master->gambar1 = 'uploads'.$lastid.'_'.$req->image1;
        // $master->gambar2 = 'uploads'.$lastid.'_'.$req->image2;
        // $master->gambar3 = 'uploads'.$lastid.'_'.$req->image3;
        $master->new = '1';
        $master->sale = '0';
        $master->gift = '0';
        $master->model = $req->model;
        $master->kategori = $req->kategori;
        $master->save();
        

        //return view('index')->with('nama',$lastid);
        return redirect('/addproduct');
    }

    public function showallproductadmin()
    {
        $allproduk=master::all();
        $result = "";

        return view ('showallproductadmin')
        ->with('allproduk',$allproduk)
        ->with('result',$result);
    }

    public function viewdeleteproduct($id)
    {
        $allproduk=master::all()->where('id', '=', $id);

        return view ('deleteproduct')
        ->with('allproduk',$allproduk);
    }

    public function viewupdateproduct($id)
    {

        $allproduk=master::all()->where('id', '=', $id);

        return view ('updateproduct')
        ->with('allproduk',$allproduk);
    }

    public function deleteproduct(Request $req)
    {
        $id=$req->id;
        DB::table('masters')->where('id', '=', $id)->delete();

        $allproduk=master::all();
        $result = "sukses delete data dengan id " . $id;

        return view ('showallproductadmin')
        ->with('allproduk',$allproduk)
        ->with('result',$result);
    }

    public function updateproduct(Request $req)
    {
        $id=$req->id;
        $judul=$req->judul;
        $keterangan=$req->keterangan;
        $model=$req->model;
        $kategori=$req->kategori;
        $harga=$req->harga;
        $image1=$req->image1;
        $image2=$req->image2;
        $image3=$req->image3;

        if(Input::hasFile('image1')){

            $file = Input::file('image1');
            $nameImage = $id.'_1_'.$file->getClientOriginalName();          
            $file->move('uploads',$nameImage);

            $image1 = 'uploads/'.$nameImage;
            
        }

        if(Input::hasFile('image2')){

            $file = Input::file('image2');
            $nameImage = $id.'_2_'.$file->getClientOriginalName();          
            $file->move('uploads',$nameImage);

            $image2 = 'uploads/'.$nameImage;
            
        }

        if(Input::hasFile('image3')){

            $file = Input::file('image3');
            $nameImage = $id.'_3_'.$file->getClientOriginalName();          
            $file->move('uploads',$nameImage);

            $image3 = 'uploads/'.$nameImage;
            
        }

        $query = DB::table('masters')
            ->where('id', $id);

        if(!is_null($image1) && !is_null($image2) && !is_null($image3)){
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori,'gambar1' => $image1,'gambar2' => $image2,'gambar3' => $image3]);
        }else if(!is_null($image1) && !is_null($image2)){
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori,'gambar1' => $image1,'gambar2' => $image2]);
        }else if(!is_null($image1) && !is_null($image3)){
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori,'gambar1' => $image1,'gambar3' => $image3]);
        }else if(!is_null($image2) && !is_null($image3)){
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori,'gambar2' => $image2,'gambar3' => $image3]);
        }else if(!is_null($image1)){
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori,'gambar1' => $image1]);
        }else if(!is_null($image2)){
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori,'gambar2' => $image2]);
        }else if(!is_null($image3)){
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori,'gambar3' => $image3]);
        }else{
            $query->update(['judul' => $judul,'harga' => $harga,'keterangan' => $keterangan,'model' => $model,'kategori' => $kategori]);
        }

        $allproduk=master::all();
        $result = "sukses update data dengan id " . $id;
        return view ('showallproductadmin')
        ->with('allproduk',$allproduk)
        ->with('result',$result);
    }
}
