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

    <title>Login Guru</title>

    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">
</head>

<body>
    <section class="login d-flex">
        <div class="login-left">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-6">
                    @if($_SESSION["login_g"] == 1 )
                    <div class="benar_salah">
                        <img src="{{asset('scr/login/pass.png')}}" alt="">
                        <h5>Gagal Masuk,<br /> NIP Atau Kata Sandi Salah!!!</h5>
                        <a href="/login_guru">
                            <button type="button" class="tombol_1 cek">Ulangi</button>
                        </a>
                    </div>
                    @else
                    <div class="header">
                        <h1>Selamat Datang</h1>
                        <p>Silahkan masukkan NIP dan juga password kamu.</p>
                    </div>
                    <div class="login-form">

                        <form action="/cek_guru" method="POST">
                            {{csrf_field() }}
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP">

                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="pass" placeholder="Masukkan Password">

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
                        <img src="{{asset('scr/login/2.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{asset('scr/login/3.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{asset('scr/login/1.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>