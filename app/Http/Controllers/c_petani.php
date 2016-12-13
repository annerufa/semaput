<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\m_laporan;
use App\m_anggota;
use App\m_analisis;
use Carbon\Carbon;
use App\Http\Requests\lahanRequest;

class c_petani extends Controller
{
    public function index(request $request)
    {
        $anggota = m_anggota::find($request->session()->get('id')); 
        return view('v_homePetani',compact('anggota'));
    }

    public function ShowFormDataLahan()
    {
        return view('v_kondisiLahan');
    }


    public function ubahProfil(Request $request)
    {
        $anggota = m_anggota::find($request->session()->get('id') );
        $anggota->alamat = $request->alamat;
        $anggota->tlp = $request->tlp;
        $anggota->password = $request->password;
        $anggota->save();
        return view('v_homePetani');
    }

    
    public function simpanUmurLuas(lahanRequest $request){
        $request->session()->put('umurPadi',$request->umurPadi);
        $request->session()->put('luasLahan',$request->luasLahan);
        if ($request->umurPadi>14) {
            return view('v_cekn');  
        }else{
            return view('v_cekp');
            $request->session()->put('warnaDaun','--');
        }
    }

    public function simpanWarnaDaun(Request $request){
        $request->session()->put('warnaDaun',$request->warnaDaun);
        return view('v_cekp');  
    }

    public function simpanUnsurP(Request $request){
        $request->session()->put('kadarP',$request->kadarP);
        return view('v_cekk');  
    }

    public function simpanUnsurK(Request $request){
        $request->session()->put('kadarK',$request->kadarK);
        return view('v_cekph');  
    }

    public function simpanPh(Request $request){
        $request->session()->put('ph',$request->ph);
        return view('v_hasil');  
    }

    public function tampilHasil(Request $request)
    { $request->session()->put('ph',$request->ph);
       if ($request->session()->get('umurPadi')<25) { //jika umur 1-24 hari dan belum tumbuh daun
            if ($request->session()->get('ph')=='basa'||$request->session()->get('ph')=='agak basa') {
                $request->session()->put('urea','0');
                $request->session()->put('za',($request->session()->get('luasLahan')*50));
            }else{
                $request->session()->put('urea',($request->session()->get('luasLahan')*50));
                $request->session()->put('za','0');
            }
       }else{   //jika umur padi lebih dari 14 hari atau sudah tumbuh daun

            if ($request->session()->get('warnaDaun')=='rendah') { //mengecek unsur n dan ph
                if ($request->session()->get('ph')=='basa'||$request->session()->get('ph')=='agak basa') {
                    $request->session()->put('urea','0');
                    $request->session()->put('za',($request->session()->get('luasLahan')*50));
                }else{
                    $request->session()->put('urea', ($request->session()->get('luasLahan')*50));
                    $request->session()->put('za','0');
                }
            }elseif ($request->session()->get('warnaDaun')=='sedang') {
                if ($request->session()->get('ph')=='basa'||$request->session()->get('ph')=='agak basa') {
                    $request->session()->put('urea','0');
                    $request->session()->put('za',($request->session()->get('luasLahan')*75));
                }else{
                    $request->session()->put('urea',($request->session()->get('luasLahan')*75));
                    $request->session()->put('za','0');
                }
            }else {
                if ($request->session()->get('ph')=='basa'||$request->session()->get('ph')=='agak basa') {
                    $request->session()->put('urea','0');
                    $request->session()->put('za',($request->session()->get('luasLahan')*100));
                }else{
                    $request->session()->put('urea',($request->session()->get('luasLahan')*100));
                    $request->session()->put('za','0');
                }
            }
        }

            if ($request->session()->get('kadarP')=='rendah') { //mengecek unsur p dan menentukan pupuk SP-36
                $request->session()->put('sp36',($request->session()->get('luasLahan')*100));

            }elseif ($request->session()->get('kadarP')=='sedang') {
                $request->session()->put('sp36',($request->session()->get('luasLahan')*75));

            }else{
                $request->session()->put('sp36',($request->session()->get('luasLahan')*50));
            }

            //mengecek unsur k dan menentukan pupuk KCL dg jerami atau tanpa jerami
            if ($request->session()->get('kadarK')=='rendah') { 
                $request->session()->put('KCLJ',($request->session()->get('luasLahan')*50));
                $request->session()->put('KCLN',($request->session()->get('luasLahan')*100));

            }elseif ($request->session()->get('kadarK')=='sedang') {
                $request->session()->put('KCLJ','0');
                $request->session()->put('KCLN',($request->session()->get('luasLahan')*50));
            }else{
                $request->session()->put('KCLJ','0');
                $request->session()->put('KCLN',($request->session()->get('luasLahan')*50));
            }
          return view('v_hasilAnalisis'); 
    }

    public function simpanHasil(Request $request)
    {
        $laporan = new m_analisis();
        $laporan->id_petani = $request->session()->get('id'); 
        $laporan->luasLahan = $request->session()->get('luasLahan');
        $laporan->umurPadi = $request->session()->get('umurPadi');
        if (session()->get('umurPadi')>24) {
            $laporan->kadarN = $request->session()->get('warnaDaun');
        } else {
            $laporan->kadarN = '-';
        }
        $laporan->kadarP = $request->session()->get('kadarP');
        $laporan->kadarK = $request->session()->get('kadarK');
        $laporan->ph = $request->session()->get('ph');
        $laporan->urea = $request->session()->get('urea');
        $laporan->sp36 = $request->session()->get('sp36');
        $laporan->KCLJ = $request->session()->get('KCLJ');
        $laporan->KCLN = $request->session()->get('KCLN');
        $laporan->ZA = $request->session()->get('za');
        $laporan->waktuLaporan = Carbon::now();
        $laporan->save();
        $request->session()->forget('luasLahan');
        $request->session()->forget('umurPadi');
        $request->session()->forget('kadarK');
        $request->session()->forget('kadarP');
        $request->session()->forget('warnaDaun');
        $request->session()->forget('ph');
        $request->session()->forget('urea');
        $request->session()->forget('za');
        $request->session()->forget('sp36');
        $request->session()->forget('KCLN');
        $request->session()->forget('KCLJ');
        return redirect('/Petani');
    }

    public function batalSimpan(Request $request)
    {
        $request->session()->forget('luasLahan');
        $request->session()->forget('umurPadi');
        $request->session()->forget('kadarK');
        $request->session()->forget('kadarP');
        $request->session()->forget('warnaDaun');
        $request->session()->forget('ph');
        $request->session()->forget('urea');
        $request->session()->forget('za');
        $request->session()->forget('sp36');
        $request->session()->forget('KCLN');
        $request->session()->forget('KCLJ');

        return redirect('/Petani');
    }

}
