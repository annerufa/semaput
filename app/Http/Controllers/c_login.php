<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\m_anggota;

class c_login extends Controller
{

    public function login(Request $request)
    {
        $anggota = m_anggota::where('username',$request->username)->first(); 
        if (count($anggota)==0) {
            $request->session()->put('alertUsername','Masukkan username dan password yang valid');
            return view('login');
        } else {
            if ($request->password != $anggota->password) {
                $request->session()->put('alertPassword','Masukkan password yang valid');
                return view('login');
            } else {
                $request->session()->put('id',$anggota->id_anggota);
                if ($anggota->status=='petani') {
                    session()->put('id',$anggota->id_anggota);
                    return view('v_homePetani',compact('anggota'));
                } else {
                    return view('v_homeKetua');
                } 
            }   
        }
    }

    public function logout(request $request)
    {
        $request->session()->forget('alertUsername');
        $request->session()->forget('alertPassword');
        $request->session()->forget('id');
        $request->session()->forget('luasLahan');
        $request->session()->forget('umurPadi');
        $request->session()->forget('kadarK');
        $request->session()->forget('kadarP');
        $request->session()->forget('kadarN');
        $request->session()->forget('ph');
        $request->session()->forget('urea');
        $request->session()->forget('za');
        $request->session()->forget('sp36');
        $request->session()->forget('KCLN');
        $request->session()->forget('KCLJ');
        return view('login');
    }

}
