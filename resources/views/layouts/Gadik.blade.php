@extends('index')
@section('content')
    <div class="d-flex p-0 justify-content-end mt-0 mb-0">

    </div>
    <div class="card p-5">


        <div class="d-flex p-0 justify-content-end mt-0 mb-0">
            <div class="button" style="margin-right: 10px">
                <a class="btn btn-primary" href="#">Tambah siswa</a>
            </div>

        </div>



        <table class="table table-striped table-hover mt-3">
            <thead class="thead table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nrp</th>
                    <th scope="col">Pangkat</th>
                    <th scope="col">Jabatan</th>
                    {{-- <th scope="col">Pelajaran</th> --}}
                </tr>
            </thead>
            <tbody class="table-body">
                @forelse ($Gadik as $item)
                    <tr>
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td> {{ $item->Name }} </td>
                        <td> {{ $item->Nrp }} </td>
                        <td> {{ $item->Pangkat }} </td>
                        <td> {{ $item->Jabatan }} </td>
                        {{-- <td> {{ $item->Mapel->Pelajaran }} </td> --}}
                    </tr>

                @empty
                    <tr class="keterangan">
                        <td colspan="10" class="text-center fw-lighter my-5 text-white ">tidak ada data tersedia
                        </td>
                    </tr>
                @endforelse

            </tbody>
    </div>
@endsection
