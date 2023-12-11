<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
	public function index()
	{

        $kategori = DB::table('kategori')->paginate(15);

    	// mengirim data kategori ke view index
		return view('kategoriindex',['kategori' => $kategori]);

	}


      // view data kategori
      public function view($id)
      {
      //mengambil data kategori dari database kategori
        $kategori = DB::table('kategori')->where('ID', $id)->get();

        //mengalihkan tampilan ke view dari kategori
        return view('kategoriview', ['kategori' => $kategori]);
      }

}
