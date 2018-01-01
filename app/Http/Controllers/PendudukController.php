<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Penduduk;
class PendudukController extends Controller
{

    public function viewData (){
    	$penduduk = DB::table('penduduks')->get();
    	return view('penduduk.penduduk', ['penduduks'=>$penduduk]);
    }


    public function viewEdit(Request $request, $id){
    	$penduduk = DB::table('penduduks')->where('id',$id)->get();
    	return view('penduduk.ubah',[
    		'penduduks' => $penduduk,
    	]);
    }


    public function editData(Request $request, $id){
    	DB::table('penduduks')
    		->where('id', $id)
    		->update([
    			'nik' => $request->input('nik'),
    			'nama' => $request->input('nama'),
                'provinsi' => $request->input('provinsi'),
                'kabupaten' => $request->input('kabupaten'),
                'kecamatan' => $request->input('kecamatan'),
    			'desa' => $request->input('desa'),
                'pekerjaan' => $request->input('pekerjaan'),
                'pendapatan' => $request->input('pendapatan'),
    			'jumlah_anggota_keluarga' => $request->input('jumlah_anggota_keluarga'),
    		]);
    	
    	return redirect()->back()->with('message', 'Data Berhasil diubah.');
    }

    public function deleteData(Request $request, $id){
        DB::table('penduduks')
            ->where('id',$id)
            ->delete();
        return redirect()->back()->with('message','Data Berhasil dihapus');
    }

}
