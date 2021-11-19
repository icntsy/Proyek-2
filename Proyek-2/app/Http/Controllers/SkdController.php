<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skd;

class SkdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "data_skd" => Skd::all()
        ];

        return view("/admin/skd/data_skd", $data);
    }

    /*
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
            "skd" => skd::where("id", $id)->first()
        ];

        return view('/admin/skd/edit_skd',$data);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses_tambah_skd(Request $request)
    {
        //untuk tanbah
        // dd($request);
        skd::create([
            'nama' =>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'pekerjaan'=>$request->pekerjaan,
            'alamat'=>$request->alamat,
            'keterangan'=>$request->keterangan

            ]);
            return redirect("/skd");
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
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->password;
        $jenis_kelamin = $request->jenis_kelamin;
        $agama = $request->agama;
        $alamat = $request->alamat;
        $pekerjaan = $request->pekerjaan;
        $keterangan = $request->keterangan;

        skd::where('id', $id)->update([

            'nama' =>$nama,
            'tempat_lahir'=>$tempat_lahir,
            'tanggal_lahir'=>$tanggal_lahir,
            'jenis_kelamin'=>$jenis_kelamin,
            'agama'=>$agama,
            'pekerjaan'=>$pekerjaan,
            'alamat'=>$alamat,
            'keterangan'=>$keterangan
        ]);

        return redirect('/skd');
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
        Skd::where("id", $id)->delete();

        return redirect()->back();
    }
    public function form_tambah_skd()
    {
        return view("admin/skd/form_tambah_skd");

    }
}

