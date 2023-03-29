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
    <link rel="stylesheet" href="{{ asset('mycss/guru/guru_update_semester.css') }}">

    <title>Sunting Nilai</title>

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

    <section id="siapa_kamu">
        <div class="container">
            <div class="row">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="/dsh_guru#fitur">Home</a></li>
                            <li class="breadcrumb-item active"> <a href="/guru_tampil_nilai/
                            <?php echo $_SESSION["sem_guru"]; ?>
                            ">Lihat Nilai</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sunting Nilai</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Sunting Nilai Semester <?php echo $_SESSION["sem_guru"] ?></h2>
                    <span class="sub-title">Silahkan Isi Form Dibawah Ini Untuk Menyunting Nilai Siswa</span>
                </div>
            </div>
            <div class="row tabel_sunting ">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form method="post" action="/proses_update_nilai">
                        @foreach($siswa as $a)
                        <h5>Nama : {{ $a->nama }}</h5>
                        <h6>Nis &nbsp&nbsp&nbsp : {{ $a->nis }}</h6>
                        @endforeach
                        <table class="table center table-striped">
                            {{ csrf_field() }}
                            @foreach($nilai as $b)
                            <tr>
                                <th>NO</th>
                                <th>MATA PELAJARAN</th>
                                <th colspan="3">NILAI</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <th>Matematika</th>
                                <td><input type="number" name="mat" value="{{ $b->mat }}" class="form-control" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <th>Bahasa Indonesia</th>
                                <td><input type="number" name="indo" value="{{ $b->indo }}" class="form-control" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <th>Ilmu Pengetahuan Alam</th>
                                <td><input type="number" name="ipa" value="{{ $b->ipa }}" class="form-control" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <th>Ilmu Pengetahuan Sosial</th>
                                <td><input type="number" name="ips" value="{{ $b->ips }}" class="form-control" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <th>Agama</th>
                                <td><input type="number" name="agama" value="{{ $b->agama }}" class="form-control" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <th>Pendidikan Kewarganegaraan</th>
                                <td><input type="number" name="pkn" value="{{ $b->pkn }}" class="form-control" required></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <input type="hidden" name="nis" value="{{ $b->nis }}">
                        </table>
                        <div class="form text-center kritik">
                            <h5>Masukkan Kritik dan Saran Untuk Siswa</h5>
                            <textarea class="form-control" id="floatingTextarea" name="keterangan">{{ $b->keterangan }}</textarea>
                        </div>
                        @endforeach
                        <input type="hidden" name="sem" value="{{ $sem }}"><br>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Simpan Nilai</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>