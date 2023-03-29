<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('mycss/guru/guru_pass.css') }}">

    <title>Ubah Sandi Guru</title>

    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">
</head>

<body>
    @if($_SESSION["error_g"] == 1 )
    <div class="benar_salah">
        <img src="{{asset('scr/login/pass.png')}}" alt="">
        <h5>Kata Sandi Sebelumnya Salah!!!</h5>
        <a href="/ubah_pass_guru">
            <button type="button" class="tombol_1 cek">Ulangi</button>
        </a>
    </div>
    @elseif ($_SESSION["error_g"] == 2 )
    <div class="benar_salah">
        <img src="{{asset('scr/login/pass.png')}}" alt="">
        <h5>Kata Sandi Guru Berhasil Diubah<br />!!!</h5>
        <a href="/dsh_guru">
            <button type="button" class="tombol_1 cek">Kembali ke Home</button>
        </a>
    </div>
    @endif
    <nav class="navbar navbar-expand-lg nav-color position-fixed w-100">
        <div class="container">
            <a class="nav-link active" href="/dsh_guru">
                RAPORKU
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section id="ubah_pass">
        <div class="container">
            <div class="row">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="/dsh_guru">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ubah Sandi</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row judul_pass">
                <div class="col-12 text-center">
                    <h2>Ubah Sandi Guru</h2>
                    <span class="sub-title">Silahkan Isi Form Dibawah Ini</span>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="/ubah_pass_guru_cek" method="post">
                        {{csrf_field() }}
                        <div class="mb-3">
                            <h5>Sandi Sebelumnya</h5>
                            <input type="password" name="old_pass" class="form-control">
                        </div>
                        <div class="mb-3">
                            <h5>Sandi Terbaru</h5>
                            <input type="password" name="new_pass" class="form-control" required>
                        </div>
                        <div class="d-grid gap-2 tombol">
                            <button type="button" class="tombol_ubah" onclick="openPopup()">Ubah Sandi</button>
                        </div>

                        <div class="popup" id="popup">
                            <img src="{{asset('scr/login/pass.png')}}" alt="">
                            <h5>Yakin Ingin Mengganti Kata Sandi?</h5>
                            <button type="button" class="tombol_1 tidak" onclick="closePopup()">Tidak</button>
                            <button type="submit" class="tombol_2 iya">Iya</button>
                        </div>

                    </form>


                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <script src="{{asset('myjs/overlay.js')}}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>