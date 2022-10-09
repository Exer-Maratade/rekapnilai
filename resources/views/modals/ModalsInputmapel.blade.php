<!-- Modal -->

<div class="modal fade" id="ModalsinputPelajaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <th scope="col">Jumlah pelajaran</th>
                                    <th scope="col">Gadik</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"> <b>1</b> </th>
                                    <td><input type="text" name="Pelajaran" class="form-control" id="Pelajaran">
                                    <td><input type="text" name="Gadik_id" class="form-control" id="Gadik_id">
                                    </td>
                                    <td>
                                        <li class="col" style="list-style: none">
                                            @foreach ($Mapel as $item)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <div class="col">
                                                            {{ $item->Gadik->Pangkat }}.
                                                            {{ $item->Gadik->Name }}
                                                            <b>NRP</b>
                                                            {{ $item->Gadik->Nrp }}
                                                        </div>
                                                </div>
                                            @endforeach
                                        </li>

                                    </td>


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
