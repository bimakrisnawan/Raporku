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

    <table border='1' class="table">
        <tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>ACTION</th>
        </tr>
        @foreach($profil as $b)
        <tr>
            <td>{{ $b->nis }}</td>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->tanggal_lahir }}</td>
            <td>{{ $b->alamat }}</td>
            <td>{{ $b->ips }}</td>
            <td><a href=" /update/{{ $b->nis }}" class="btn btn-outline-warning btn-sm">Edit</a>
                <a href="/delete/{{ $b->nis }}" class="btn btn-outline-danger btn-sm">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>