@extends('index')
@section('content')
<table class="table table-striped table-hover">
    <thead class="thead table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nrp</th>
            <th scope="col">Pangkat</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Pelajaran</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($Siswa as $item)
            <th scope="row"> {{ $loop->iteration }} </th>
            <td> {{ $item->Name }} </td>
            <td> {{ $item->Nosis }} </td>
            <td> {{ $item->Pleton }} </td>
            <td> {{ $item->Kompi }} </td>
            <td>
                <div class="button">
                    <a href="#">
                        <div class="btn btn-dark">nilai</div>
                    </a>
                </div>
            </td>
        @endforeach --}}

    </tbody>
@endsection