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
                                        <!-- <input type="text" name="jenis_kelamin" id="input-last-name" class="form-control" placeholder="Jenis Kelamin" value="{{$sku->jenis_kelamin}}"> -->
                                        <select id="nama" name="jenis_kelamin"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control" value="{{$sku->jenis_kelamin}}">
                                        <label for="nama" class="form-label">Pilih Jenis Kelamin</label>
                                            <!-- <option selected>Pilih Jenis Kelamin</option> -->
                                            <option value="P">Perempuan</option>
                                            <option value="L">Laki-laki</option>
                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Agama</label>
                                        <select id="nama" name="agama"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control" value="{{$sku->agama}}">
                                        <option selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                        </select>
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
                                <div class="col-lg-6">
                                <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Nohp</label>
                                        <input type="text" name="nohp" id="input-last-name" class="form-control" placeholder="nohp" value="{{$sku->nohp}}">
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
                                    <input type="text" name="keterangan" id="input-last-name" class="form-control" placeholder="keterangan" value="{{$sku->keterangan}}">
                                    </div>
                                </div>
                                 <div class="submit-btn-area">
                                     <button id="form_submit" type="submit">Simpan <i class="ti-arrow-right"></i></button>
                                </div>
                                    </div>
                            </div>
                        </div>
                </div>
                <hr class="my-4" />
            </div>
            </div>
          </div>
@endsection
