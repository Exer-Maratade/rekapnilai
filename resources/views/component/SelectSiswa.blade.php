@extends('index')

@section('content')
    <div class="d-flex p-5 justify-content-end mt-0 mb-0"></div>
    <div class="card p-5">

        <select class="form-select" aria-label="Default select example">
            <option selected disabled>Tahun</option>
            <option value="2022 Gel-II">2022 Gel-II</option>
            <option value="2023 Gel-I">2023 Gel-I</option>
            <option value="2023 Gel-II">2023 Gel-II</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>

        
        <select class="form-select mt-3" aria-label="Default select example">
            <option selected disabled>Angkatan</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="60">60</option>
        </select>

        <select class="form-select mt-3" aria-label="Default select example">
            <option selected disabled>Pleton</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>

        <select class="form-select mt-3" aria-label="Default select example">
            <option selected disabled>Kompi</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
     
        <select class="form-select mt-3" aria-label="Default select example">
            <option selected disabled>Pelajaran</option>
            <option value="Dalmas">Dalmas</option>
            <option value="Multimedia">Multimedia</option>
            <option value="SAR">SAR</option>
            <option value="Intelkam">Intelkam</option>
        </select>

        <div class="d-flex justify-content-end mt-3">
            <div class="footer">
                <button type="find" class="btn btn-primary">Cari siswa</button>
            </div>
        </div>
    </div>
@endsection
