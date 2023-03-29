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
    <link rel="stylesheet" href="{{ asset('mycss/guru/guru_tampil_profil.css') }}">
    <link rel=" stylesheet" href="{{ asset('mycss/responsive.css') }}">

    <title>Lihat Profil Siswa</title>


    <link rel="icon" href="{{asset('scr/icon/matkul.png')}}" type="image/x-icon">

</head>

<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  nav-color position-fixed w-100">
        <div class="container">
            <a class="nav-link active" href="/dsh_guru">
                RAPORKU
            </a>
        </div>
    </nav>

    <!-- akhir navbar -->

    @if($_SESSION["hapus"] != 0 )
    <div class="benar_salah">
        <img src="{{asset('scr/login/pass.png')}}" alt="">
        <h5>
            Ingin Menghapus Siswa Dengan NIS<br />
            "{{$_SESSION['hapus']}}" ??
        </h5>
        <a href="/guru_tampil_profil_siswa">
            <button type="button" class="tombol_1 cek">Tidak</button>
        </a>
        <a href="/delete_profil/{{$_SESSION['hapus']}}">
            <button type="button" class="tombol_2 cek">Iya</button>
        </a>
    </div>
    @else

    <!-- awal lihat profil -->
    <section id="lihat_profil">
        <div class="container">
            <div class="row">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="/dsh_guru#fitur">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lihat Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <h1>Lihat Profil Siswa</h1>
                    <span class="sub-title">Gunakan Fitur Cari Berdasarkan NIS Untuk Mempermudah Pencarian Siswa</span>
                </div>
            </div>
            <div class="row">
                <section id="search"><br><br><br>
                    <div class="col-10 mx-auto">
                        <form action="/cari_tampil_profil_byNis" method="post">
                            {{csrf_field() }}
                            <div class=" input-group mb-3 input-cari">
                                <input type="text" name="cari_byNIS" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Siswa Berdasarkan NIS">
                                <button class="btn button-primary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="row tabell">
                <div class="col"></div>
                <div class="col-6 text-center">
                    <a href="/tambah">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary">
                                Tambahkan Siswa
                            </button>
                        </div>
                    </a>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
    <section class="tabel_siswa">
        <div class="row text-center tabel-siswa ">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table center table table-striped">
                    <tr>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>TANGGAL LAHIR</th>
                        <th>ALAMAT</th>
                        <th colspan="2">AKSI</th>
                    </tr>
                    {{csrf_field() }}
                    <?php $i = 0; ?>
                    @forelse($siswa as $b)
                    <!-- kalau data ada -->
                    <tr>
                        <th>{{ $b->nis }}</th>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->tanggal_lahir }}</td>
                        <td>{{ $b->alamat }}</td>
                        <td>
                            <a href=" /update/{{ $b->nis }}" class="btn btn-edit btn-sm">Sunting</a>
                        </td>
                        <td>
                            <form action="/pop_up_delete" method="post" class="posisi_delete">
                                {{csrf_field() }}
                                <input type="hidden" name="nis" value="{{ $b->nis }}"><br>
                                <button type="submit" class="btn btn-delete btn-sm">
                                    Hapus
                                </button>
                            </form>


                        </td>
                    </tr>
                    <!-- kalau data kosong -->
                    @empty
                    <tr>
                        <th colspan="6">
                            <br>
                            <h3>Tidak Ada Siswa Yang Terdaftar!!!</h3>
                            <br>
                        </th>
                    </tr>
                    <?php $i = $i + 1; ?>
                    @endforelse
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
    @endif

    <!-- akhir untuk kamu -->

    <script src="{{asset('myjs/overlay.js')}}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>