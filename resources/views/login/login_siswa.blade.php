<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('mycss/login/login2.css') }}">

    <!-- FONT Poppins-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>Login Siswa</title>

    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">
</head>

<body>
    <section class="login d-flex">
        <div class="login-left">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    @if($_SESSION["login_s"] == 1 )
                    <div class="benar_salah">
                        <img src="{{asset('scr/login/pass.png')}}" alt="">
                        <h5>Gagal Masuk,<br /> NIS Atau Kata Sandi Salah!!!</h5>
                        <a href="/login_siswa">
                            <button type="button" class="tombol_1 cek">Ulangi</button>
                        </a>
                    </div>
                    @else
                    <div class="header">
                        <h1>Masuk Sebagai Siswa</h1>
                        <p>Silahkan masukkan NIS dan juga kata sandi kamu</p>
                    </div>
                    <div class="login-form">

                        <form action="/cek_siswa" method="POST">
                            {{csrf_field() }}
                            <label for="nis" class="form-label">Nomor Induk Siswa</label>
                            <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS">

                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="pass" placeholder="Masukkan kata sandi">

                            <button class="btn-primary">Masuk</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>

        </div>
        <div class="login-right">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="{{('scr/login/siswa/1.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{('scr/login/siswa/2.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{('scr/login/siswa/3.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>