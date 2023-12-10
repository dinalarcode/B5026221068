<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function indexnilaikuliah()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('indexnilaikuliah',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilaikuliah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');

	}
}
