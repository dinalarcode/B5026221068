<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BedakController extends Controller
{
	public function index()
	{
    	// mengambil data dari table bedak
        $bedak = DB::table('bedak')->get();
    	// mengirim data bedak ke view index
		return view('indexbedak',['bedak' => $bedak]);

	}

	// method untuk menampilkan view form tambah stock bedak
	public function tambahstock()
	{

		// memanggil view tambah
		return view('tambahstock');

	}

	// method untuk insert data ke table Bedak
	public function store(Request $request)
	{
        $tersedia = ($request->stockbedak > 0) ? 'Y' : 'N';
		// insert data ke table Bedak
		DB::table('bedak')->insert([
			'merkbedak' => $request->merkbedak,
			'stockbedak' => $request->stockbedak,
			'tersedia' => $tersedia
		]);
		// alihkan halaman ke halaman bedak
		return redirect('/bedak');

	}

    public function edit($id)
	{
		// mengambil data bedak berdasarkan id yang dipilih
		$bedak = DB::table('bedak')->where('kodebedak',$id)->get();
		// passing data bedak yang didapat ke view editbedak.blade.php
		return view('editbedak',['bedak' => $bedak]);

	}

    public function update(Request $request)
	{
        $tersedia = ($request->stockbedak > 0) ? 'Y' : 'N';
		// update data bedak
		DB::table('bedak')->where('kodebedak',$request->id)->update([
			'merkbedak' => $request->merkbedak,
			'stockbedak' => $request->stockbedak,
            'tersedia' => $tersedia,
		]);
		// alihkan halaman ke halaman bedak
		return redirect('/bedak');
	}

	// method untuk hapus data bedak
	public function hapus($id)
	{
		// menghapus data bedak berdasarkan id yang dipilih
		DB::table('bedak')->where('kodebedak',$id)->delete();

		// alihkan halaman ke halaman bedak
		return redirect('/bedak');
	}

    public function view($id)
	{
		// mengambil data bedak berdasarkan id yang dipilih
		$bedak = DB::table('bedak')->where('kodebedak',$id)->get();

		return view('viewbedak',['bedak' => $bedak]);
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bedak sesuai pencarian data
		$bedak = DB::table('bedak')
		->where('merkbedak','like',"%".$cari."%")
        ->get();
    		// mengirim data bedak ke view index
		return view('indexbedak',['bedak' => $bedak, 'cari' => $cari]);

	}

}
