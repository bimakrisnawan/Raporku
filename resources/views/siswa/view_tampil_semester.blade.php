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
    <link rel="stylesheet" href="{{ asset('mycss/siswa/siswa_semester.css') }}">
    <link rel="stylesheet" href="{{ asset('mycss/responsive.css') }}">

    <title>Tampil Nilai Siswa</title>

    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-color position-fixed w-100">
        <div class="container">
            <a class="nav-link active" href="/view_siswa">
                RAPORKU
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <section id="nilai">
        <div class="container">
            <div class="row">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="/view_siswa#semester">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Nilai Semester</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Nilai Semester <?php echo $_SESSION["sem_tampil_siswa"] ?></h2>
                </div>
            </div>
            <div class="row informasi">
                <div class="col-md-2"></div>
                <div class="col-md-9">
                    @foreach($data as $b)
                    <h5>Nama : {{ $b->nama }}</h5>
                    <h6>Nis &nbsp&nbsp&nbsp : {{ $b->nis }}</h6>
                    @endforeach
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row card-pilihan ">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="center table table-striped">
                        @foreach($semester as $b)
                        <tr>
                            <th>NO</th>
                            <th>MATA PELAJARAN</th>
                            <th>NILAI</th>
                            <th>KKM</th>
                            <th>KETERANGAN</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <th>Matematika</th>
                            <td>{{ $b->mat }}</td>
                            @foreach($id_kkm as $c)
                            <td>{{ $c->mat}}</td>
                            @if ($b->mat < $c->mat)
                                <td>Tidak Tuntas</td>
                                @else
                                <td>Tuntas</td>
                                @endif
                                @endforeach
                        </tr>
                        <tr>
                            <td>2</td>
                            <th>Bahasa Indonesia</th>
                            <td>{{ $b->indo }}</td>
                            @foreach($id_kkm as $c)
                            <td>{{ $c->indo}}</td>
                            @if ($b->indo < $c->indo)
                                <td>Tidak Tuntas</td>
                                @else
                                <td>Tuntas</td>
                                @endif
                                @endforeach
                        </tr>
                        <tr>
                            <td>3</td>
                            <th>Ilmu Pengetahuan Alam</th>
                            <td>{{ $b->ipa }}</td>
                            @foreach($id_kkm as $c)
                            <td>{{ $c->ipa}}</td>
                            @if ($b->ipa < $c->ipa)
                                <td>Tidak Tuntas</td>
                                @else
                                <td>Tuntas</td>
                                @endif
                                @endforeach
                        </tr>
                        <tr>
                            <td>4</td>
                            <th>Ilmu Pengetahuan Sosial</th>
                            <td>{{ $b->ips }}</td>
                            @foreach($id_kkm as $c)
                            <td>{{ $c->ips}}</td>
                            @if ($b->ips < $c->ips)
                                <td>Tidak Tuntas</td>
                                @else
                                <td>Tuntas</td>
                                @endif
                                @endforeach
                        </tr>
                        <tr>
                            <td>5</td>
                            <th>Agama</th>
                            <td>{{ $b->agama }}</td>
                            @foreach($id_kkm as $c)
                            <td>{{ $c->agama}}</td>
                            @if ($b->agama < $c->agama)
                                <td>Tidak Tuntas</td>
                                @else
                                <td>Tuntas</td>
                                @endif
                                @endforeach
                        </tr>
                        <tr>
                            <td>6</td>
                            <th>Pendidikan Kewarganegaraan</th>
                            <td>{{ $b->pkn }}</td>
                            @foreach($id_kkm as $c)
                            <td>{{ $c->pkn}}</td>
                            @if ($b->pkn < $c->pkn)
                                <td>Tidak Tuntas</td>
                                @else
                                <td>Tuntas</td>
                                @endif
                                @endforeach
                        </tr>
                        <tr>
                            <td></td>
                            <th>Rata - Rata</th>
                            <th>{{ $b->mean }}</th>
                        </tr>
                        <tr>
                            <th colspan="5">
                                <p>Keterangan Dari Guru :</p> <br />
                                {{ $b->keterangan}}
                            </th>
                        </tr>
                    </table>

                    @endforeach
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>