<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAPORT</title>
</head>

<body>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            NILAI SISWA
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/guru_tampil_nilai/1">SEMESTER 1</a></li>
            <li><a class="dropdown-item" href="/guru_tampil_nilai/2">SEMESTER 2</a></li>
            <li><a class="dropdown-item" href="/guru_tampil_nilai/3">SEMESTER 3</a></li>
            <li><a class="dropdown-item" href="/guru_tampil_nilai/4">SEMESTER 4</a></li>
            <li><a class="dropdown-item" href="/guru_tampil_nilai/5">SEMESTER 5</a></li>
            <li><a class="dropdown-item" href="/guru_tampil_nilai/6">SEMESTER 6</a></li>
        </ul>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <a href="/guru_tampil_profil_siswa"><button>PROFIL SISWA</button></a>
</body>

</html>