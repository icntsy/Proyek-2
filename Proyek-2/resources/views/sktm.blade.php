@extends("template.layout")

@section("page_title", "DATA SKTM")

@section("page_content")



<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">

          @if(auth()->user()->role == 1)

          Surat Keterangan Tidak Mampu

          @else

          Hallo Gaes

          @endif
        </h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" class="sort" data-sort="name">No.</th>
              <th scope="col" class="sort" data-sort="status">Nama</th>
              <th scope="col" class="sort" data-sort="budget">NIK</th>
              <th scope="col" class="sort" data-sort="status">Tempat Lahir</th>
              <th scope="col" class="sort" data-sort="budget">Tanggal Lahir</th>
              <th scope="col" class="sort" data-sort="budget">Jenis Kelamin</th>
              <th scope="col" class="sort" data-sort="budget">Kewarganegaraan</th>
              <th scope="col" class="sort" data-sort="budget">Agama</th>
              <th scope="col" class="sort" data-sort="budget">Alamat</th>
              <th scope="col" class="sort" data-sort="budget">Pekerjaan</th>
              <th scope="col" class="sort" data-sort="budget">Status Kawin</th>
              <th scope="col">Aksi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="list">
            @php $no = 0 @endphp

            @foreach($data_sktm as $sktm)
            <tr>
              <td>{{ ++$no }}</td>
              <td>{{ $sktm->nama }}</td>
              <td>{{ $sktm->nik }}</td>
              <td>{{ $sktm->tempat_lahir }}</td>
              <td>{{ $sktm->tanggal_lahir }}</td>
              <td>{{ $sktm->jenis_kelamin }}</td>
              <td>{{ $sktm->kewarganegaraan }}</td>
              <td>{{ $sktm->agama }}</td>
              <td>{{ $sktm->alamat }}</td>
              <td>{{ $sktm->pekerjaan }}</td>
              <td>{{ $sktm->status_kawin }}</td>
              <td>
                <a href="" class="btn btn-warning btn-sm">
                  Edit
                </a>
                <a href="" class="btn btn-danger btn-sm">
                  Hapus
                </a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection