<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Siswa;
use DB;
class CRUD extends Controller
{
     public function index(Siswa $siswa){
    	$siswa = $siswa->all();
        // printf($siswa);
       // return response()->json($siswa, 200)->header('Content-Type','application/json');
        return view('vendor.backpack.base.dashboard')->with('siswa', $siswa);
    }

      public function tambah(Request $request){

    	$siswa = new Siswa;
        $siswa->nis = Input::get('nis');  
    	$siswa->nama = Input::get('nama');
        $siswa -> jenis_kelamin = $request ->get('jenis_kelamin');
    	$siswa->tahun_masuk = Input::get('tahun_masuk'); 
    	$siswa->tempat_lahir = Input::get('tempat_lahir'); 
    	$siswa->tanggal_lahir = Input::get('tanggal_lahir'); 
        $siswa -> agama = $request ->get('agama');
    	$siswa->alamat = Input::get('alamat'); 
        $siswa -> jurusan = $request ->get('jurusan');
    	$siswa->kelas = Input::get('kelas'); 

    	$siswa->save();

    	 return \Redirect::to('/dashboard')
                ->with('msg','Data Berhasil tambah');
    
    }

    public function ubah(Request $request, Siswa $siswa, $id){
    	$siswa = $siswa::find($id);
    	 
        $siswa->nis = Input::get('nis');  
        $siswa->nama = Input::get('nama');
        $siswa -> jenis_kelamin = $request ->get('jenis_kelamin');
        $siswa->tahun_masuk = Input::get('tahun_masuk'); 
        $siswa->tempat_lahir = Input::get('tempat_lahir'); 
        $siswa->tanggal_lahir = Input::get('tanggal_lahir'); 
        $siswa -> agama = $request ->get('agama');
        $siswa->alamat = Input::get('alamat'); 
        $siswa -> jurusan = $request ->get('jurusan');
        $siswa->kelas = Input::get('kelas'); 

         $siswa->save();
    	 return \Redirect::to('/dashboard')
                ->with('msg','Data Berhasil diubah');

    }

    public function hapus(Siswa $siswa, $id){
    	$siswa = $siswa::find($id)->delete();
    	 session()->flash('msg', 'Berhasil Menghapus Data');
    	return redirect()->back();

    }

    public function add(){
    	return view('vendor.backpack.base.tambah');
    }

    public function getUbah(Siswa $siswa,$id){
            $siswa = $siswa::find($id);

        return view('vendor.backpack.base.ubah')->with('siswa',$siswa);
    }
}
