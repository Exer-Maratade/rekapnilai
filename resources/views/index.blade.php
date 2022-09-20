<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="/css/css.css">


    <title>@yield('title')</title>
</head>

<body>


    <div class="container">
        {{-- SIDE BAR --}}
        <div class="sidebar">
            <div class="header">
                <div class="list-item">
                    <a href="#" style="text-decoration: none">
                        <label class="description mb-3 justify-content-center">
                            <h4 class="text-white">SPN POLDA SULUT</h4>
                        </label>
                        <img src="/img/presisi.png" alt="" class="icon" height="75px">
                    </a>

                    <div class="nav">

                        <div class="nav-item mt-2">
                            <a class="btn {{ Request::is('Siswa') ? 'text-primary' : '' }}"
                                href="Siswa">
                                <i class="bi bi-journal-bookmark-fill"></i>
                                <span class="description"> Data Siswa</span>
                            </a>
                        </div>

                        <div class="nav-item mt-2">
                            <a class="btn {{ Request::is('Pelajaran') ? 'text-primary' : '' }}"
                                href="{{route('Pelajaran')}}">
                                <i class="bi bi-speedometer"></i>
                                <span class="description"> Mata Pelajaran</span>
                            </a>
                        </div>

                        <div class="nav-item mt-2">
                            <a class="btn {{ Request::is('Input-Absen') ? 'text-primary' : '' }}">
                                <i class="bi bi-people-fill"></i>
                                <span class="description"> Gadik</span>
                            </a>
                        </div>

                        <div class="nav-item mt-2">
                            <a class="btn {{ Request::is('Eksport-Laporan') ? 'text-primary' : '' }}">
                                <i class="bi bi-printer-fill"></i>
                                <span class="description"> eksport laporan</span>
                            </a>
                        </div>

                    </div>



                </div>


            </div>
        </div>

        {{-- MAIN CONTENT --}}
        <div class="main-content">
            <div class="main">
                <div class="list-item">

                    <div class="content">
                        
                        @yield('content')
                        {{-- @include('layouts.NilaiSiswa') --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- USER --}}











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
