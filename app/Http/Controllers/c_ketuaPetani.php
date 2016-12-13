<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\m_laporan;
use App\m_anggota;
use App\Http\Requests\anggotaRequest;
use App\Http\Requests\cek\UpdateRequest;

class c_ketuaPetani extends Controller
{
    public function index()
    {
        return view('v_homeKetua');
    }

    public function showLaporanAnalisis()
    {
        $laporans = m_laporan::orderBy('waktuLaporan', 'DESC')->get();
        $petani = m_anggota::all();
        return view('v_laporanAnalisis', compact('laporans','petani'));
    }

    public function showDataAnggota()
    {
        $anggotas = m_anggota::Anggota()->get();
        return view('v_DataAnggota', compact('anggotas'));
    }

    public function tambahAnggota(anggotaRequest $request)
    {
        $anggota = new m_anggota();
        $anggota->nama = $request->nama_petani;
        $anggota->alamat = $request->alamat;
        $anggota->tlp = $request->tlp;
        $anggota->username = $request->Username;
        $anggota->password = $request->Password;
        $anggota->status = 'petani';
        $anggota->save();
        return redirect('/dataAnggota');
        //return redirect()->route('anggota.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    public function hapusAnggota($id_petani)
    {
        $anggotas = m_anggota::findOrFail($id_petani);
        $anggotas->delete();
        return redirect('/dataAnggota');
    }
}
