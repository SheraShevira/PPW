<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ltihan Input 01</title>
</head>

<body>
    <form action="" method="post" name="frInput">
        Nama Anda :
        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
        <hr>
        <input type="submit" name="btnKirim" value="Kirim">
    </form>
    <?php
    if (isset($_POST['btnKirim'])) {
        $nama = $_POST['nama'];
        $x = "Nama Anda : <b>$nama</b>";
        if ($nama == "") {
            echo '<script language="javascript">';
            echo 'alert("Nama Tidak Boleh Kosong!")';
            echo '</script>';
            echo $x = "";
        } else {
            echo ("<hr/>");
            echo $x;
        }
    }
    ?>
</body>

</html>