<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mycss/siswa/siswa_main.css') }}">
    <link rel="stylesheet" href="{{asset('mycss/responsive.css')}}">

    <title>RaporKu</title>

    <!-- icon -->
    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent position-fixed w-100">
        <div class="container">
            <a class="nav-link active" href="/view_siswa">
                RAPORKU
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav- mx-2">
                        <a class="nav-link" aria-current="page" href="#hero">HOME</a>
                    </li>
                    <li class="nav- mx-2">
                        <a class="nav-link" aria-current="page" href="#semester">NILAIKU</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            AKUN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/ubah_pass_siswa">Ubah Sandi</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="button-secondary" onclick="openPopup()">Keluar</button>
                <div class="popup" id="popup">
                    <img src="{{asset('scr/login/pass.png')}}" alt="">
                    <h5>Anda Yakin Ingin Keluar?</h5>
                    <button type="button" class="tombol_tidakyakin" onclick="closePopup()">Tidak</button>
                    <a href="/logout">
                        <button type="button" class="tombol_yakin">Iya</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- akhir navbar -->


    <!-- hero section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    {{csrf_field() }}
                    @foreach($siswa as $b)
                    <h2>Halo,</h2>
                    <h1>{{ $b->nama }}</h1>
                    <p><span class="fw-bold">Informasi Siswa:</span>
                        <br />NIS : {{ $b->nis}}
                        <br />Tanggal Lahir : {{ $b->tanggal_lahir}}
                        <br />Alamat Rumah : {{ $b->alamat}}
                    </p>
                    @endforeach
                    <a href="#semester">
                        <button class="button-lg-primary">Lihat Nilaimu</button>
                    </a>
                </div>
            </div>

            <img src="{{asset('scr/siswa/main/hero.png')}}" alt="" class="position-absolute end-0 bottom-0 top-0 img-hero">
        </div>
    </section>
    <!-- akhir hero section -->

    <!-- awal siapa kamu -->

    <section id="semester">
        <div class="container">
            <div class="row judul_semester">
                <div class="col-12 text-center">
                    <h2>Pilih Semester</h2>
                    <span class="sub-title">Pilih semester yang ingin kamu lihat nilainya</span>
                </div>
            </div>
            <div class="row text-center card-pilihan ">
                <div class="col-md-4">
                    <div class="card-semester">
                        <a href="/sem/1">
                            <div class="img">
                                <img src="{{asset('scr/siswa/main/1.png')}}" alt="" height="180">
                            </div>
                            <h4>Semester 1</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-semester">
                        <a href="/sem/2">
                            <div class="img">
                                <img src="{{asset('scr/siswa/main/2.png')}}" alt="" height="180">
                            </div>
                            <h4>Semester 2</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-semester">
                        <a href="/sem/3">
                            <div class="img">
                                <img src="{{asset('scr/siswa/main/3.png')}}" alt="" height="180">
                            </div>
                            <h4>Semester 3</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center card-pilihan ">
                <div class="col-md-4">
                    <div class="card-semester">
                        <a href="/sem/4">
                            <div class="img">
                                <img src="{{asset('scr/siswa/main/4.png')}}" alt="" height="180">
                            </div>
                            <h4>Semester 4</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-semester">
                        <a href="/sem/5">
                            <div class="img">
                                <img src="{{asset('scr/siswa/main/5.png')}}" alt="" height="180">
                            </div>
                            <h4>Semester 5</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-semester">
                        <a href="/sem/6">
                            <div class="img">
                                <img src="{{asset('scr/siswa/main/6.png')}}" alt="" height="180">
                            </div>
                            <h4>Semester 6</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- akhir siapa kamu -->

    <script src="{{asset('myjs/siswa1.js')}}"></script>
    <script src="{{asset('myjs/overlay.js')}}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>