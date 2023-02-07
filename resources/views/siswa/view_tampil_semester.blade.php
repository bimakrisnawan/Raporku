<!doctype html>
<html lang="en">

<head>
    <title>Halaman Pengunjung</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>MAT</th>
            <th>INDO</th>
            <th>IPA</th>
            <th>IPS</th>
            <th>AGAMA</th>
            <th>PKN</th>
            <th>MEAN</th>
        </tr>
        {{csrf_field() }}
        @foreach($semester as $b)
        <tr>
            <td>{{ $b->mat }}</td>
            <td>{{ $b->indo }}</td>
            <td>{{ $b->ipa }}</td>
            <td>{{ $b->ips }}</td>
            <td>{{ $b->agama }}</td>
            <td>{{ $b->pkn }}</td>
            <td>{{ $b->mean }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>