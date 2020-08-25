<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisBuku;

class JenisBukuController extends Controller
{
    public function list()
    {
		$data['jenis_buku'] = JenisBuku::get();

		return view('jenis_buku.list')->with($data);   	
    }

    public function tambah()
    {
    	return view('jenis_buku.tambah');
    }

    public function simpan(Request $r)
    {
    	$jb = new JenisBuku;
    	$jb->nama = $r->input('nama');
    	$jb->deskripsi = $r->input('deskripsi');
    	$jb->save();

    	return redirect()->route('jenis_buku_list');
    }

    public function ubah($id)
    {
		$data['jenis_buku'] = JenisBuku::find($id);

		return view('jenis_buku.ubah')->with($data);   	
    }

    public function perbarui(Request $r, $id)
    {
    	$jb = JenisBuku::find($id);
    	$jb->nama = $r->input('nama');
    	$jb->deskripsi = $r->input('deskripsi');
    	$jb->save();

    	return redirect()->route('jenis_buku_list');
    }
    public function hapus($id)
    {
		$jb = JenisBuku::find($id);
		$jb->delete();

    	return redirect()->route('jenis_buku_list');  	
    }
}
