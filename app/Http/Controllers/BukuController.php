<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisBuku;
use App\Buku;

class BukuController extends Controller
{
    public function list()
    {
		$data['buku'] = Buku::get();

		return view('buku.list')->with($data);   	
    }

    public function tambah()
    {
		$data['jenis_buku'] = JenisBuku::get();

    	return view('buku.tambah')->with($data);
    }

    public function simpan(Request $r)
    {
    	$jb = new Buku;
    	$jb->jenis_buku_id = $r->input('jenis_buku_id');
    	$jb->judul = $r->input('judul');
    	$jb->penulis = $r->input('penulis');
    	$jb->penerbit = $r->input('penerbit');
    	$jb->tahun = $r->input('tahun');
    	$jb->save();

    	return redirect()->route('buku_list');
    }

    public function ubah($id)
    {
		$data['jenis_buku'] = JenisBuku::get();
		$data['buku'] = Buku::find($id);

		return view('buku.ubah')->with($data);   	
    }

    public function perbarui(Request $r, $id)
    {
    	$jb = Buku::find($id);
    	$jb->jenis_buku_id = $r->input('jenis_buku_id');
    	$jb->judul = $r->input('judul');
    	$jb->penulis = $r->input('penulis');
    	$jb->penerbit = $r->input('penerbit');
    	$jb->tahun = $r->input('tahun');
    	$jb->save();

    	return redirect()->route('buku_list');
    }
    public function hapus($id)
    {
		$jb = Buku::find($id);
		$jb->delete();

    	return redirect()->route('buku_list');  	
    }
}
