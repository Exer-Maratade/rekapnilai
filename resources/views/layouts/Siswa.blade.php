@extends('index')

@section('content')
    <div class="d-flex p-2 justify-content-end mt-3 mb-0" style="margin-right: 50px">
       
        <div class="button" style="margin-right: 10px">
            <a class="btn btn-primary" href="#">Tambah siswa</a>
        </div>

        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Angkatan
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2022 Gel-II</a></li>
                <li><a class="dropdown-item" href="#">2023 Gel-I</a></li>
                <li><a class="dropdown-item" href="#">2023 Gel-II</a></li>
            </ul>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <thead class="thead table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nosis</th>
                <th scope="col">Pleton</th>
                <th scope="col">Kompi</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Siswa as $item)
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
            @endforeach

        </tbody>
    </table>
@endsection
