<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilaikuliah
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data nilaikuliah ke view index
    	return view('nilai',['nilaikuliah' => $nilaikuliah]);

    }
  // method untuk insert data ke table
  public function store(Request $request)
  {
      // insert data ke table nilaikuliah
      DB::table('nilaikuliah')->insert([
          'NRP' => $request->NRP,
          'NilaiAngka' => $request->NilaiAngka,
          'SKS' => $request->SKS
      ]);
      // alihkan halaman ke halaman nilaikuliah
      return redirect('/nilai');

  }
    // method untuk menampilkan view form tambah nilaikuliah
    public function tambahNilai()
    {
        // memanggil view tambah
        return view('tambahnilai');

    }


}
