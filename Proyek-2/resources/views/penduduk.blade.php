@extends("template.layout")

@section("page_title", "DATA PENDUDUK")

@section("page_content")



<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">

          @if(auth()->user()->role == 1)

          Data Kependudukan

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
              <th scope="col" class="sort" data-sort="budget">Jenis Kelamin</th>
              <th scope="col" class="sort" data-sort="budget">Kewarganegaraan</th>
              <th scope="col" class="sort" data-sort="budget">Agama</th>
              <th scope="col" class="sort" data-sort="budget">Alamat</th>
              <th scope="col">Aksi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="list">
            @php $no = 0 @endphp

            @foreach($data_penduduk as $pdd)
            <tr>
              <td>{{ ++$no }}</td>
              <td>{{ $pdd->nama }}</td>
              <td>{{ $pdd->nik }}</td>
              <td>{{ $pdd->jenis_kelamin }}</td>
              <td>{{ $pdd->kewarganegaraan }}</td>
              <td>{{ $pdd->agama }}</td>
              <td>{{ $pdd->alamat }}</td>
              <td>
                <a href="" class="btn btn-warning btn-sm">
                  Edit
                </a>
                <a onclick="return confirm('Ingin Menghapus Data Ini ?')" href="/penduduk/{{ $pdd->id }}/hapus" class="btn btn-danger btn-sm">
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
