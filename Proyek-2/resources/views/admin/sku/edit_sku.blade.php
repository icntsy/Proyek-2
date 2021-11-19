@extends("template.layout")

@section("page_title", "DATA SKD")

@section("page_content")
<div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Surat Keterangan Usaha</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
                    <form action="/sku/update/{{$sku->id}}" method="post">
                        @csrf
                        <!-- @method('put') -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-name">Nama Lengkap</label>
                                        <input type="text" name="nama" id="name" class="form-control" placeholder="name" value="{{$sku->nama}}">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nik">NIK</label>
                                        <input type="teks" name="nik" id="nik" class="form-control" placeholder="NIK" value="{{$sku->nik}}">
                                    </div>
                                </div> -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                        <input type="teks" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{$sku->tempat_lahir}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Jenis Kelamin</label>
                                        <input type="text" name="jenis_kelamin" id="input-last-name" class="form-control" placeholder="Jenis Kelamin" value="{{$sku->jenis_kelamin}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="input-first-name" class="form-control" placeholder="Tanggal Lahir" value="{{$sku->tanggal_lahir}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Agama</label>
                                        <input type="text" name="agama" id="input-last-name" class="form-control" placeholder="Agama" value="{{$sku->agama}}">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan" id="input-last-name" class="form-control" placeholder="Kewarganegaraan">
                                    </div>
                                </div> -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Pekerjaan</label>
                                        <input type="texr" name="pekerjaan" id="input-last-name" class="form-control" placeholder="Pekerjaan" value="{{$sku->pekerjaan}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Alamat</label>
                                        <input type="text" name="alamat" id="input-last-name" class="form-control" placeholder="Alamat" value="{{$sku->alamat}}">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Status Kawin</label>
                                        <input type="texr" name="status_kawin" id="input-last-name" class="form-control" placeholder="Status Kawin" value="{{$sku->status_kawin}}">
                                    </div>
                                </div> -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Keterangan</label>
                                <input type="text" name="keterangan" id="input-last-name" class="form-control" placeholder="keterangan" value="{{$sku->keterangan}}"> <br>
                                <div class="submit-btn-area">
                                    <button id="form_submit" type="submit">Simpan <i class="ti-arrow-right"></i></button>
                                </div>
                                    </div>
                            </div>
                        </div>
                </div>
                <hr class="my-4" />
            </div>
                <!-- </div>
                <hr class="my-4" /> -->
            </div>
          </div>
@endsection
