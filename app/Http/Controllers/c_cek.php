<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_cek extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('v_kondisi');
    }

    public function cekKondisi(Request $request)
    {
        $input = ([
            'id_pendaftaran' => $request->id_pendaftaran,
            'keluhan' => $request->keluhan,
            'diagnosa_penyakit' => $request->diagnosa_penyakit,
            'id_pegawai' => $request->id_pegawai,
            'saran_dokter' => $request->saran_dokter,
            'rawat_inap' => $request->rawat_inap,
            'rekam_medis' => $request->rekam_medis,
            'rujukan' => $request->rujukan,
            'resep' => $request->resep,
            'uji_lab' => $request->uji_lab,
            ]);
        pelayanan::create($input);
        return redirect('pemeriksaan');
    }



    public function create()
    {
       return view('v_cekn');
    }

    public function cekn()
    {
       return view('v_cekn');
    }
    public function cekp()
    {
       return view('v_cekp');
    }

    public function cekk()
    {
       return view('v_cekk');
    }
    public function cekph()
    {
       return view('v_cekph');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request==kon) {
            return view('v_cekn');
        }elseif ($request==n) {
            return view('v_cekn');
        }elseif ($request==p) {
            return view('v_cekn');
        }elseif ($request==k) {
            return view('v_cekn');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
