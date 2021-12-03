<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sku;

class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "data_sku" => Sku::all()
        ];

        return view("/admin/sku/data_sku", $data);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses_tambah_sku(Request $request)
    {
        //untuk tanbah
        // dd($request);
        sku::create([
            'nama' =>$request->nama,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'agama'=>$request->agama,
            'pekerjaan'=>$request->pekerjaan,
            'alamat'=>$request->alamat,
            'keterangan'=>$request->keterangan,
            'nohp'=>$request->nohp
            ]);
            return redirect("/sku");
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
        $tanggal_lahir = $request->tanggal_lahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $agama = $request->agama;
        $alamat = $request->alamat;
        $pekerjaan = $request->pekerjaan;
        $keterangan = $request->keterangan;
        $nohp = $request->nohp;

        sku::where('id', $id)->update([

            'nama' =>$nama,
            'tempat_lahir'=>$tempat_lahir,
            'tanggal_lahir'=>$tanggal_lahir,
            'jenis_kelamin'=>$jenis_kelamin,
            'agama'=>$agama,
            'alamat'=>$alamat,
            'pekerjaan'=>$pekerjaan,
            'keterangan'=>$keterangan,
            'nohp'=>$nohp
        ]);

        return redirect('/sku');
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
        Sku::where("id", $id)->delete();

        return redirect()->back();
    }
    public function form_tambah_sku()
    {
        return view("admin/sku/form_tambah_sku");

    }
    public function tampilan($id){
        $data = [
            "sku" => sku::where("id", $id)->first()
        ];

        return view('/admin/sku/edit_sku',$data);

    }
}
