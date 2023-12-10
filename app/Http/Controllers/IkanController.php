<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IkanController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $ikan = DB::table('ikan')->paginate(15);

    	// mengirim data ikan ke view index
		return view('ikanindex',['ikan' => $ikan]);

	}

	// method untuk menampilkan view form tambah ikan
	public function tambah()
	{

		// memanggil view tambah
		return view('ikantambah');

	}

	// method untuk insert data ke table ikan
	public function store(Request $request)
	{
        if ($request->jumlahikan > 0) $tersedia = 1;
        else $tersedia = 0;

		// insert data ke table ikan
		DB::table('ikan')->insert([
			'kodeikan' => $request->kodeikan,
			'namaikan' => $request->namaikan,
			'jumlahikan' => $request->jumlahikan,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman ikan
		return redirect('/ikan');

	}

	// method untuk edit data ikan
	public function edit($id)
	{
		// mengambil data ikan berdasarkan id yang dipilih
		$ikan = DB::table('ikan')->where('kodeikan',$id)->get();
		// passing data ikan yang didapat ke view edit.blade.php
		return view('ikanedit',['ikan' => $ikan]);

	}

	// update data ikan
	public function update(Request $request)
	{
        if ($request->jumlahikan > 0) $tersedia = 1;
        else $tersedia = 0;
		// update data ikan
		DB::table('ikan')->where('kodeikan',$request->id)->update([
			'namaikan' => $request->namaikan,
			'jumlahikan' => $request->jumlahikan,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman ikan
		return redirect('/ikan');
	}

	// method untuk hapus data ikan
	public function hapus($id)
	{
		// menghapus data ikan berdasarkan id yang dipilih
		DB::table('ikan')->where('kodeikan',$id)->delete();

		// alihkan halaman ke halaman ikan
		return redirect('/ikan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table ikan sesuai pencarian data
		$ikan = DB::table('ikan')
		->where('namaikan','like',"%".$cari."%")
		->paginate();

    		// mengirim data ikan ke view index
		return view('ikanindex',['ikan' => $ikan]);

	}

      // view data ikan
      public function view($id)
      {
      //mengambil data ikan dari database ikan
        $ikan = DB::table('ikan')->where('kodeikan', $id)->get();

        //mengalihkan tampilan ke view dari ikan
        return view('ikanview', ['ikan' => $ikan]);
      }

}
