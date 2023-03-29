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
    <link rel="stylesheet" href="{{ asset('mycss/guru/guru_tampil_nilai.css') }}">
    <link rel=" stylesheet" href="{{ asset('mycss/responsive.css') }}">

    <title>Lihat Nilai Siswa</title>

    <!-- icon -->
    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav-color position-fixed w-100">
        <div class="container">
            <a class="nav-link active " href="/dsh_guru">
                RAPORKU
            </a>
        </div>
    </nav>

    <!-- akhir navbar -->


    <!-- awal untuk kamu -->

    <section id="lihat_nilai">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="/dsh_guru#fitur">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lihat Nilai</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Lihat Nilai Siswa</h1>
                    <span class="sub-title">Gunakan Fitur Cari Berdasarkan NIS Untuk Mempermudah Pencarian Nilai Siswa</span>
                </div>
            </div>
            <div class="row">
                <section id="search">
                    <div class="col-10 mx-auto h-200">
                        <form action="/cari_tampil_nilai_byNis" method="post">
                            {{ csrf_field() }}
                            <div class="input-group mb-3 input-cari">
                                <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{asset('scr/Icon/bab.png')}}" alt="">
                                    Semester </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/guru_tampil_nilai/1">Semester 1</a></li>
                                    <li><a class="dropdown-item" href="/guru_tampil_nilai/2">Semester 2</a></li>
                                    <li><a class="dropdown-item" href="/guru_tampil_nilai/3">Semester 3</a></li>
                                    <li><a class="dropdown-item" href="/guru_tampil_nilai/4">Semester 4</a></li>
                                    <li><a class="dropdown-item" href="/guru_tampil_nilai/5">Semester 5</a></li>
                                    <li><a class="dropdown-item" href="/guru_tampil_nilai/6">Semester 6</a></li>
                                </ul>
                                <input type="text" name="cari_byNIS" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Siswa Berdasarkan NIS">
                                <button class="btn button-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
    </div>

    <div class="tabel_siswa">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Semester
                    <?php echo $_SESSION["sem_guru"]; ?>
                </h2>
            </div>
        </div>
        <div class="row text-center tabell ">
            <div class="col-1"></div>
            <div class="col-10">
                <table class="table table-striped">
                    <tr>
                        <th>NIS</th>
                        <th>MATEMATIKA</th>
                        <th>B. INDONESIA</th>
                        <th>IPA</th>
                        <th>IPS</th>
                        <th>AGAMA</th>
                        <th>PKN</th>
                        <th>RATA RATA</th>
                        <th>KETERANGAN</th>
                        <th>AKSI</th>
                    </tr>
                    @forelse($nilai as $b)
                    {{csrf_field() }}
                    <tr>
                        <th>{{ $b->nis }}</th>
                        <td>{{ $b->mat }}</td>
                        <td>{{ $b->indo }}</td>
                        <td>{{ $b->ipa }}</td>
                        <td>{{ $b->ips }}</td>
                        <td>{{ $b->agama }}</td>
                        <td>{{ $b->pkn }}</td>
                        <td>{{ $b->mean }}</td>
                        <td>{{ $b->keterangan }}</td>
                        <td><a href="/update_nilai/{{ $b->nis }}&{{$sem}}" class="btn btn-edit btn-sm">Sunting</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="10">
                            <br>
                            <h3>Tidak Ada Siswa Yang Terdaftar!!!</h3>
                            <br>
                        </th>
                    </tr>
                    @endforelse
                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    </section>

    <!-- akhir untuk kamu -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>