<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Latihan hello world php</title>
</head>

<body>
    <?php
    $tulisan = "Menggunakan PHP";
    echo ('$tulisan');
    echo ("<br/>");
    echo ("$tulisan");
    echo ("<br/>");
    echo 'Arnold berkata : I\'ll be back';
    echo ("<br/>");
    echo "Nama: \t Shera"; //tab -> \t
    echo ("<hr/>");

    echo ("<br/>");
    echo ("<hr/>");
    $alamat = <<< isi
    Jl. Panda Raya II No.19, Pondok Raji,
    Ciputat Timur, Tangerang Selatan,
    Banten.
    isi;
    echo $alamat;
    echo ("<hr/>");
    echo ("<br/>");


    ?>
</body>

</html>