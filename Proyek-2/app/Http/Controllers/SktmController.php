<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sktm;

class SktmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "data_sktm" => sktm::all()
        ];

        return view("/admin/sktm/data_sktm", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function tampilan($id){
        $data = [
            "sktm" => sktm::where("id", $id)->first()
        ];

        return view('/admin/sktm/edit_sktm',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses_tambah_sktm(Request $request)
    {
        //untuk tanbah
        // dd($request);
        sktm::create([
            'nama' =>$request->nama,
            'nik' =>$request->nik,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'kewarganegaraan' =>$request->kewarganegaraan,
            'agama'=>$request->agama,
            'alamat'=>$request->alamat,
            'pekerjaan'=>$request->pekerjaan,
            'status_kawin'=>$request->status_kawin,
            'keterangan'=>$request->keterangan,
            'nohp'=>$request->nohp

            ]);
            return redirect("/sktm");
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
    public function edit(Request $request, $id)
    {
        $nama = $request->nama;
        $nik = $request->nik;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $kewarganegaraan = $request->kewarganegaraan;
        $agama = $request->agama;
        $alamat = $request->alamat;
        $pekerjaan = $request->pekerjaan;
        $status_kawin = $request->status_kawin;
        $keterangan = $request->keterangan;
        $nohp = $request->nohp;

        sktm::where('id', $id)->update([

            'nama' =>$nama,
            'nik' =>$nik,
            'tempat_lahir'=>$tempat_lahir,
            'tanggal_lahir'=>$tanggal_lahir,
            'jenis_kelamin'=>$jenis_kelamin,
            'kewarganegaraan' =>$kewarganegaraan,
            'agama'=>$agama,
            'alamat'=>$alamat,
            'pekerjaan'=>$pekerjaan,
            'status_kawin'=>$status_kawin,
            'keterangan'=>$keterangan,
            'nohp'=>$nohp
        ]);

        return redirect('/sktm');
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
       Sktm::where("id", $id)->delete();

        return redirect()->back();
    }
    public function form_tambah_sktm()
    {
        return view("admin/sktm/form_tambah_sktm");

    }
}
