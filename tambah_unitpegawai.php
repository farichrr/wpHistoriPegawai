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
    
    $unit_pegawai = $_POST['kode_unit'];
    $tipe_pegawai = $_POST['unit_pegawai'];
    $sql = "INSERT INTO unit VALUES ('".$unit_pegawai."','".$tipe_pegawai."')";
    if (mysqli_query($db, $sql)) {
     echo "<script>
                    swal({
                        title: \"Sukses!\",
                        text: \"Data Pegawai Berhasil Ditambah\",
                        type: \"success\"
                    },
                    function () {
                        window.location.href = 'attribut_pegawai.php';
                    });
                    </script>";
                    } else echo "<script>
                    swal({
                        title: \"Gagal!\",
                        text: \"Data Pegawai Sudah Ada\",
                        type: \"error\"
                    },
                    function () {
                        window.location.href = 'attribut_pegawai.php';
                    });
                    </script>";

    mysqli_close($db);
?>
    </body>
</html>