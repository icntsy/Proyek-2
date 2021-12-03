@extends("template.layout")

@section("page_title", "DATA SKD")

@section("page_content")
<div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Surat Keterangan Domisili</h3>
                </div>

              </div>
            </div>
            <div class="card-body">

              <form action="/skd/update/{{$skd->id}}" method="post" >
              @csrf

              <!-- @method('put') -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-name">Nama Lengkap</label>
                        <input type="text" name="nama" id="name" class="form-control" placeholder="name" value="{{$skd->nama}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                        <input type="teks" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{$skd->tempat_lahir}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="input-first-name" class="form-control" placeholder="Tanggal Lahir" value="{{$skd->tanggal_lahir}}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" id="input-last-name" class="form-control" placeholder="Jenis Kelamin" value="{{$skd->jenis_kelamin}}">
                      </div>
                    </div>
                        <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Agama</label>
                        <input type="text" name="agama"  id="input-last-name" class="form-control" placeholder="Agama" value="{{$skd->agama}}">
                      </div>
                        </div>
                        <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Pekerjaan</label>
                        <input type="texr" name="pekerjaan" id="input-last-name" class="form-control" placeholder="Pekerjaan" value="{{$skd->pekerjaan}}">
                      </div>
                        </div>
                        <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Alamat</label>
                        <input type="text" name="alamat" id="input-last-name" class="form-control" placeholder="Alamat" value="{{$skd->alamat}}">
                      </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Nohp</label>
                            <input type="text" name="nohp" id="input-last-name" class="form-control" placeholder="nohp" value="{{$skd->nohp}}">
                        </div>
                        </div>
                        <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Keterangan</label>
                        <input type="text" name="keterangan" id="input-last-name" class="form-control" placeholder="Keterangan" value="{{$skd->keterangan}}">
                      </div>
                      <div class="submit-btn-area">
                          <button id="form_submit" type="submit">Simpan <i class="ti-arrow-right"></i></button>
                    </div>
                    </div>
                            </div>
                        </div>
                </div>
                  </div>
                </div>
                <hr class="my-4" />
            </div>
          </div>
@endsection
