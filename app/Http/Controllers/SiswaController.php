<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Siswa;
use App\Http\Requests;
use DB;
class SiswaController extends Controller
{
   

    public function byNis(Siswa $siswa,$nis){
    	// $siswa = $siswa::where('nis',$nis)->get();

       $siswa = $siswa::where('nis',$nis)->get();
                

    	if(!$siswa){
    		return response()->json('not found', 404);
    	}

    	return response()->json($siswa,200);
    }

    public function index(Siswa $siswa){
    	$siswa = $siswa->all();
        // printf($siswa);
       // return response()->json($siswa, 200)->header('Content-Type','application/json');

    	if(!$siswa){
    	return response()->json('not found', 404);
    	}
    	
    	return response()->json($siswa, 200);
    
    }

    public function tambah(){

    	$siswa = new Siswa;
        $siswa->nis = Input::get('nis');  
    	$siswa->nama = Input::get('nama');
    	$siswa->jenis_kelamin = Input::get('jenis_kelamin'); 
    	$siswa->tahun_masuk = Input::get('tahun_masuk'); 
    	$siswa->tempat_lahir = Input::get('tempat_lahir'); 
    	$siswa->tanggal_lahir = Input::get('tanggal_lahir'); 
    	$siswa->agama = Input::get('agama'); 
    	$siswa->alamat = Input::get('alamat'); 
    	$siswa->jurusan = Input::get('jurusan'); 
    	$siswa->kelas = Input::get('kelas'); 

    	$succes = $siswa->save();

    	if(!$succes){
    		return response()->json('error saving', 500);
    	}
    		return response()->json('succes', 201);
    }

    public function ubah(Siswa $siswa, $id){
    	$siswa = $siswa::find($id);
    	 
        $siswa->nis = Input::get('nis'); 
        $siswa->nama = Input::get('nama');
    	$siswa->jenis_kelamin = Input::get('jenis_kelamin'); 
    	$siswa->tahun_masuk = Input::get('tahun_masuk'); 
    	$siswa->tempat_lahir = Input::get('tempat_lahir'); 
    	$siswa->tanggal_lahir = Input::get('tanggal_lahir'); 
    	$siswa->agama = Input::get('agama'); 
    	$siswa->alamat = Input::get('alamat'); 
    	$siswa->jurusan = Input::get('jurusan'); 
    	$siswa->kelas = Input::get('kelas'); 

    	$succes = $siswa->save();
    	if(!$succes){
    		return response()->json('error updating', 500);
    	}
    	return response()->json('succes updated' ,201);

    }

    public function hapus(Siswa $siswa, $id){
    	$siswa = $siswa::find($id);
    	
    	if(is_null($siswa)){
    		return response()->json('not found', 404);
    	}
    	$succes = $siswa->delete();

    	if(!$succes){
    		return response()->json('error deleting', 500);
    	}
    		return response()->json('deleting succes',200);

    }
}
