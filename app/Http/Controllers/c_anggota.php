<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\m_laporan;
use App\m_anggota;

use App\Http\Requests\cek\StoreRequest;
use App\Http\Requests\cek\UpdateRequest;

class c_anggota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = m_anggota::all();
        return view('v_anggota', compact('anggotas'));
    }

    public function create()
    {
        $laporans = m_laporan::all();
        return view('v_laporan', compact('laporans'));
    }

    public function store(Request $request)
    {
        $anggotas = new m_anggota();
        $anggotas->nama_petani = $request->nama_petani;
        $anggotas->alamat = $request->alamat;
        $anggotas->tgl_lahir = $request->tgl_lahir;
        $anggotas->tlp = $request->tlp;
        $anggotas->username = $request->username;
        $anggotas->password = $request->password;
        $anggotas->save();
        return redirect()->route('anggota.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_petani)
    {
        $anggotas = m_anggota::findOrFail($id_petani);
        return view('edit', compact('anggotas'));
    }

    public function update(Request $request, $id_petani)
    {
        $anggotas = m_anggota::findOrFail($id_petani);
        $anggotas->nama_petani = $request->nama_petani;
        $anggotas->alamat = $request->alamat;
        $anggotas->tgl_lahir = $request->tgl_lahir;
        $anggotas->tlp = $request->tlp;
        $anggotas->username = $request->username;
        $anggotas->password = $request->password;
        $anggotas->save();
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_petani)
    {
        $anggotas = m_anggota::findOrFail($id_petani);
        $anggotas->delete();
        return redirect()->route('anggota.index')->with('alert-success', 'Data Berhasil Dihapus.');
    }
}
