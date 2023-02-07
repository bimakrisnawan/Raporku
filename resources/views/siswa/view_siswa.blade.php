<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    Masuk siswa<br />
    <?php
    session_start();
    echo $_SESSION["nis"];
    ?><br />
    pilih semester:<br />
    <a href="/sem/1">sem 1</a>
    <a href="/sem/2">sem 2</a>
    <a href="/sem/3">sem 3</a>
    <a href="/sem/4">sem 4</a>
    <a href="/sem/5">sem 5</a>
    <a href="/sem/6">sem 6</a>
    <br />
    <a href="/ubah_pass_siswa">ganti password</a>


</body>

</html>