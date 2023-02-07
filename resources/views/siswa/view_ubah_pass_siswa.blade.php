<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/ubah_pass_siswa_cek" method="POST">
        {{csrf_field() }}
        masukkan password sebelumnya<br />
        <input type="text" name="old_pass"><br />
        masukkan password yang ingin diubah<br />
        <input type="text" name="new_pass"><br />
        <input type="submit" value="masuk">
    </form>
</body>

</html>