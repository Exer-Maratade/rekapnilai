<!-- Modal -->

@foreach ($Siswa as $item)
    <div class="modal fade" id="ModalsNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NILAI SISWA : {{ $item->name }} </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <main class="form-group">
                    <form action="/Editnilaisiswa{{ $item->id }}" method="POST" class="form-EditNilai"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Mapel</th>
                                        <th scope="col">Nilai Tugas</th>
                                        <th scope="col">Nilai Pengamatan</th>
                                        <th scope="col">Nilai Ujian</th>
                                        <th scope="col">Nilai Ahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"> {{ $loop->iteration }} </th>
                                        <td> DALMAS</td>
                                        <td><input type="text" name="NilaiTugas" class="form-control" id="NilaiTugas"></td>
                                        <td><input type="text" name="NilaiPengamatan" class="form-control" id="NilaiPengamatan"></td>
                                        <td><input type="text" name="NilaiUjian" class="form-control" id="NilaiUjian"></td>
                                        <td><input type="text" name="NIlaiAhir" class="form-control" id="NIlaiAhir"></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </form>
                </main>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
