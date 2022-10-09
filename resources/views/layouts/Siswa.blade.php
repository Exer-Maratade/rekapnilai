@extends('index')

@section('content')
    <div class="d-flex p-0 justify-content-end mt-0 mb-0"></div>
    <div class="card p-5">


        <div class="d-flex p-0 justify-content-end mt-0 mb-0">
            <div class="button" style="margin-left: 10px">
                <a class="btn btn-secondary" href="#">Tambah siswa</a>
            </div>
        </div>

        <div class="table-responsive mt-3">
            <table class="table table-responsive py-2 table-striped table-hover">
                <thead class="thead table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nosis</th>
                        <th scope="col">Pleton</th>
                        <th scope="col">Kompi</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($Siswa as $item)
                        <tr>
                            <th scope="col"> {{ $loop->iteration }} </th>
                            <td> {{ $item->Name }} </td>
                            <td> {{ $item->Nosis }} </td>
                            <td> {{ $item->Pleton }} </td>
                            <td> {{ $item->Kompi }} </td>
                            <td> {{ $item->Angkatan }} </td>
                            <td> {{ $item->Tahun }} </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ModalsNilai">
                                    Lihat Nilai
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    @include('modals.ModalsNilaipelajaran')
@endsection
