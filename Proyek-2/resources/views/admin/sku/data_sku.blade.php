@extends("template.layout")

@section("page_title", "DATA SKU")

@section("page_content")

<div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
      <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="/dashboard">Dashboards</a></li>
        <li class="breadcrumb-item active" aria-current="page">Default</li>
      </ol>
    </nav>
  </div>
  <div class="col-lg-6 col-5 text-right">
    <a href="{{ url('/sku/form_tambah_sku') }}" class="btn btn-sm btn-neutral">Tambah Data</a>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">
          @if(auth()->user()->role == 1)

          Surat Keterangan Usaha

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

            @foreach($data_sku as $sku)
            <tr>
              <td>{{ ++$no }}</td>
              <td>{{ $sku->nama }}</td>
              <td>{{ $sku->tempat_lahir }}</td>
              <td>{{ $sku->tanggal_lahir }}</td>
              <td>{{ $sku->jenis_kelamin }}</td>
              <td>{{ $sku->agama }}</td>
              <td>{{ $sku->pekerjaan }}</td>
              <td>{{ $sku->alamat }}</td>
              <td>
                <a href="/editsurat" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="http://127.0.0.1:8080/jasperserver/rest_v2/reports/reports/Sku.pdf?id={{$sku->id}}" class="btn btn-danger btn-sm" target="_blank">
                  <i class="fas fa-print"></i>
                </a>
                <a onclick="return confirm('Ingin Menghapus Data SKU Ini ?')" href="/sku/{{ $sku->id }}/hapus" class="btn btn-warning btn-sm">
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
