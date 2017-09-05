<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;

class CRUDController extends Controller
{
    public function input()
    {
        return view ('input');
    }

    public function insert(Request $req)
    {
    	$mahasiswa = new mahasiswa;

    		$mahasiswa->name = $req->var_name;
    		$mahasiswa->email = $req->email;
    		$mahasiswa->alamat = $req->alamat;

    	$mahasiswa->save();

        return redirect('/table_crud');
    }

    public function view_table_crud()
    {
    	$mahasiswa =  mahasiswa::all();
        return view ('table_crud')
        ->with('mahasiswa',$mahasiswa)
        ->with('no',1);
    }

    public function delete($id)
    {
    	$mahasiswa =  mahasiswa::find($id);
    	$mahasiswa->delete();
        return redirect('/table_crud');
    }

    public function edit($id)
    {
    	$mahasiswa =  mahasiswa::find($id);

    	//dd($mahasiswa);

        return view('edit')
        ->with('mahasiswa',$mahasiswa);
    }

     public function update(Request $req, $id)
    {
    	$mahasiswa = mahasiswa::find($id);

    		$mahasiswa->name = $req->var_name;
    		$mahasiswa->email = $req->email;
    		$mahasiswa->alamat = $req->alamat;

    	$mahasiswa->save();

        return redirect('/table_crud');
    }
}
