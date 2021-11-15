@extends("template.layout")

@section("page_title", "DATA SKD")

@section("page_content")

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">
        @if(auth()->user()->role == 1)

          Surat Keterangan Domisili

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
              <th scope="col" class="sort" data-sort="status">Tempat Lahir</th>
              <th scope="col" class="sort" data-sort="budget">Tanggal Lahir</th>
              <th scope="col" class="sort" data-sort="budget">Jenis Kelamin</th>
              <th scope="col" class="sort" data-sort="status">Agama</th>
              <th scope="col" class="sort" data-sort="budget">Pekerjaan</th>
              <th scope="col" class="sort" data-sort="budget">Alamat</th>
              <th scope="col">Aksi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="list">
            @php $no = 0 @endphp

            @foreach($data_skd as $skd)
            <tr>
              <td>{{ ++$no }}</td>
              <td>{{ $skd->nama }}</td>
              <td>{{ $skd->tempat_lahir }}</td>
              <td>{{ $skd->tanggal_lahir }}</td>
              <td>{{ $skd->jenis_kelamin }}</td>
              <td>{{ $skd->agama }}</td>
              <td>{{ $skd->pekerjaan }}</td>
              <td>{{ $skd->alamat }}</td>
              <td>
                <a href="" class="btn btn-warning btn-sm">
                <i class="fas fa-edit"></i>
                </a>

                <a href="http://127.0.0.1:8080/jasperserver/rest_v2/reports/reports/skd.pdf?id={{$skd->id}}" class="btn btn-danger btn-sm" target="_blank">
                <i class="fas fa-print"></i>
                </a>
                <a onclick="return confirm('Ingin Menghapus Data Ini ?')" href="/skd/{{ $skd->id }}/hapus" class="btn btn-warning btn-sm">
                <i class="fas fa-trash"></i>
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
