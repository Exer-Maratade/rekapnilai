@extends('index')

@section('content')
    <div class="d-flex p-0 justify-content-end mt-0 mb-0">

    </div>
    <div class="card p-5">
        <div class="d-flex p-0 justify-content-end mt-0 mb-0">
            
            <div class="button" class="btn" style="margin-right: 10px" data-bs-toggle="modal" data-bs-target="#ModalsinputPelajaran">
                <a class="btn btn-primary" href="#">Tambah Pelajaran</a>
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

        <div class="table-responsive mt-2">
            <table class="table table-responsive py-2 table-striped table-hover">
                <thead class="thead table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Gadik</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @forelse ($Mapel as $item)
                        <tr>
                            <th scope="col"> {{ $loop->iteration }} </th>
                            <td> {{ $item->Pelajaran }} </td>
                            <td> {{$item->gadik->Name}} </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
    @include('modals.ModalsInputmapel')
@endsection
