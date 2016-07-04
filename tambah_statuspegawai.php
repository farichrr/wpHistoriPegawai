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
    require_once "functionadd.php";
    $id_statuspegawai = IdStatusPegawai(autoIdStatus());
    $status_pegawai = $_POST['status_pegawai'];
    $sql = "INSERT INTO status_pegawai VALUES ('".$id_statuspegawai."','".$status_pegawai."')";
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