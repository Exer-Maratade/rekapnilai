@extends("index")

@section("content")
    <table class="table table-striped table-hover">
        <thead>
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
            <th scope="row"></th>
            <td>{{$item->name}}</td>
            <td></td>
            <td></td>
            <td></td>
            @endforeach
       
        </tbody>
    </table>
@endsection