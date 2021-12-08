<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulir Surat Skd</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <div class="row mt-5 pt-4">
          <div class="col-sm rounded text-light pt-5" style="background-color: #212529">
            <form action="/formulir_skd" method="post" >
              @csrf
              <div class="text-center">
                <h1 class="text-light">SURAT KETERANGAN DOMISILI</h1>
              </div>
              @if (session('pesan'))

              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Pengajuan Surat Telah Diterima!</strong> Kami akan menghubungi anda.
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
                            <div class="text-danger">
                            @error('nama')
                            {{$message}}
                            @enderror
                            </div>
                      </div>
                        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"> <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                          <div class="text-danger">
                            @error('tempat_lahir')
                            {{$message}}
                            @enderror
                            </div>
                            </div>
                      </div>

                    <div class="row">
                      <div class="col-sm-5 col-md-6"><label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"  placeholder="Tanggal Lahir">
                        <div class="text-danger">
                            @error('tanggal_lahir')
                            {{$message}}
                            @enderror
                            </div>
                    </div>

                        <div class="col-lg-6 col-lg-5 col-lg-6">
                      <label for="nama" class="form-label">Jenis Kelamin</label>
                      <!-- <input type="text" class="form-control" id="nama" name="agama"  placeholder="Agama"> -->
                      <select id="nama" name="jenis_kelamin"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control  ">
                      <label for="nama" class="form-label">Pilih Jenis Kelamin</label>
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-laki</option>
                            </select>
                            <div class="text-danger">
                            @error('jenis_kelamin')
                            {{$message}}
                            @enderror
                            </div>
                      </div>
                      <!-- <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"><label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="nama" name="jenis_kelamin"  placeholder="Jenis Kelamin"></div> -->
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-lg-5 col-lg-6">
                      <label for="nama" class="form-label">Agama</label>
                      <!-- <input type="text" class="form-control" id="nama" name="agama"  placeholder="Agama"> -->
                      <select id="nama" name="agama"  class="col-lg-12 col-lg-3 offset-xs-1 col-lg-6 form-control  ">
                      <!-- <label for="nama" class="form-label">Pilih Agama</label> -->
                      <option selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                    </select>
                    <div class="text-danger">
                            @error('agama')
                            {{$message}}
                            @enderror
                            </div>
                      </div>

                      <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"><label for="nama" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="nama" name="pekerjaan"  placeholder="Pekerjaan">
                        <div class="text-danger">
                            @error('pekerjaan')
                            {{$message}}
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-6"><label for="nama" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="nama" name="alamat"  placeholder="Alamat">
                          <div class="text-danger">
                            @error('alamat')
                            {{$message}}
                            @enderror
                            </div>
                        </div>

                        <!-- <div class="col-sm-6 col-md-5 col-lg-6">
                        <label for="nama" >Upload Foto KTP</label>
                          <input type="file" class="form-control" id="nama" name="alamat"  placeholder="Upload Foto KTP">
                          <div class="text-danger">
                            @error('alamat')
                            {{$message}}
                            @enderror
                            </div> -->
                        <!-- </div>  -->

                        <div class="col-sm-6 col-md-5 col-lg-6"><label for="nama" class="form-label">Keterangan</label>
                          <input type="text" class="form-control" id="nama" name="keterangan"  placeholder="Keterangan">
                          <div class="text-danger">
                            @error('keterangan')
                            {{$message}}
                            @enderror
                            </div>
                        </div>

                          <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"><label for="nohp" class="form-label">No HP</label>
                          <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Hp diisi dengan awalan 62 ">
                          <div class="text-danger">
                            @error('nohp')
                            {{$message}}
                            @enderror
                            </div>
                            </div>
                          </div>

                      <div class="row ">
                        <div class="col d-flex justify-content-center m-3">
                            <button type="submit" class="btn btn-info " name="kirim">Kirim</button>
                        </div>
                      </div>
                  </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rekap Surat Keterangan Usaha</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Tanggal Mulai</label>
                                <input type="date" name="tglm" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Tanggal Selesai</label>
                                @csrf
                                <input type="date" name="tgls" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <input type="button" id="cek" value="Cek" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>Tgl Mulai</th>
                            <th>Tgl Selesai</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>

                    <tbody></tbody>
                </table>
            </div> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>
  </body>
</html>
