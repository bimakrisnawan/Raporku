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
    <link rel="stylesheet" href="{{ asset('mycss/guru/guru_update_profil.css') }}">

    <title>Sunting Profil Siswa</title>

    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">
</head>

<body>
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

    <section id="sunting_siswa">
        <div class="container">
            <div class="row">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="/dsh_guru#fitur">Home</a></li>
                            <li class="breadcrumb-item active"> <a href="/guru_tampil_profil_siswa">Lihat Profil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Sunting Profil Siswa</h2>
                    <span class="sub-title">Silahkan Isi Form Dibawah Ini Untuk Menyunting Data Diri Siswa</span>
                </div>
            </div>
            <div class="row form_sunting ">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="post" action="/proses_update">
                        {{ csrf_field() }}
                        @foreach($siswa as $b)
                        <input type="hidden" name="nis" value="{{ $b->nis }}"><br>
                        <div class="mb-3">
                            <h5>Nama</h5>
                            <input type="text" name="nama" value="{{ $b->nama }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <h5>Password</h5>
                            <input type="password" name="pass" value="{{ $b->pass }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <h5>Tanggal Lahir</h5>
                            <input type="date" name="tanggal_lahir" value="{{ $b->tanggal_lahir }}" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <h5>Alamat</h5>
                            <input type="text" name="alamat" value="{{ $b->alamat }}" class="form-control" required>
                        </div>
                        @endforeach
                        <div class="d-grid gap-2 class_sunting">
                            <button type="submit" class="submit_sunting">Sunting Profil</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>