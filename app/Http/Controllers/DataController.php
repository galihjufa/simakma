<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Responses;
use App\Penduduk;
use DB;
use App\Province;
use App\Regency;

class DataController extends Controller
{
    public function view()
    {
        return view('tambah.tambah',[
            'provinces'=>Province::all()
        ]);
    }
    public function create(Request $request){
    	$request->validate([
    		'nik' => 'required|integer',
    		'nama' => 'required|string',
            'provinsi' => 'required|not_in:--Pilih Provinsi--',
            'kabupaten' => 'required|not_in:--Pilih Kabupaten--',
            'kecamatan' => 'required|not_in:--Pilih Kecamatan--',
    		'desa' => 'required|not_in:--Pilih Desa--',
    		'pekerjaan' => 'required|string',
    		'pendapatan' => 'required|string',
    		'jumlah_anggota_keluarga' => 'required|integer',
    		
    		]);
    	
    		$penduduk = Penduduk::create([
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
    
    	return redirect('/penduduk')->with('alert','Data Berhasil ditambahkan');
    }
    public function getRegency(Request $request, $id)
    {
        $regency = DB::table("regencies")
                    ->where("province_id",$id)
                    ->get();
        return response()->json($regency);
    }

    public function getDistrict(Request $request, $id)
    {
        $district = DB::table("districts")
                    ->where("regency_id",$id)
                    ->get();
        return response()->json($district);
    }

    public function getVillage(Request $request, $id)
    {
        $village = DB::table("villages")
                    ->where("district_id",$id)
                    ->get();
        return response()->json($village);
    }

}
