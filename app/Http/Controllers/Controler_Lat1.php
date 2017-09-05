<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class Controler_Lat1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$nama)
    {
        return view ('Content')
        ->with('id',$id)
        ->with('nama',$nama);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function input()
    {
        return view ('Form_Latihan');
    }

    public function input_post(Request $req)
    {
        $nama=$req->nama;
        $alamat=$req->alamat;
        $no_telp=$req->no_telp;
        
        return view ('Hasil_Form_Latihan')
        ->with('nama',$nama)
        ->with('alamat',$alamat)
        ->with('no_telp',$no_telp)
        ;
    }


    public function table()
    {
        //$mahasiswa=mahasiswa::all();
        $notepad="momo";

       //$myfile = fopen("note.txt", "r") or die("Unable to open file!");
        //$notepad= fread($myfile,filesize("note.txt"));
        // fclose($myfile);
        

        $mahasiswa=mahasiswa::where('id','2')->get();
        return view ('table')
        ->with('mahasiswa',$mahasiswa)
        ->with('notepad',$notepad);

        fclose($myfile);
    }
}
