<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS  -->
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
</head>
<body>


<?php
    require_once"connect.php";
    $username = $_POST['user'];
    $nama = $_POST['nama'];
    $level = $_POST['level'];
    $sql = "INSERT INTO admin VALUES ('".$username."',123456,'".$nama."','".$level."')";
    if (mysqli_query($db, $sql)) {
     echo "<script>
                    swal({
                        title: \"Sukses!\",
                        text: \"Data Pegawai Berhasil Ditambah\",
                        type: \"success\"
                    },
                    function () {
                        window.location.href = 'home_pegawai.php';
                    });
                    </script>";
                    } else echo "<script>
                    swal({
                        title: \"Gagal!\",
                        text: \"Data Pegawai Sudah Ada\",
                        type: \"error\"
                    },
                    function () {
                        window.location.href = 'admin_home.php';
                    });
                    </script>";

    mysqli_close($db);
?>
    </body>
</html>