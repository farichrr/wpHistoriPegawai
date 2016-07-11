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
$id_jabatanakademik = IdJabatanakademik(autoIdJabatanAkademik());
$keterangan_jabatanakademik = $_POST['jabatan_akademik_pegawai'];
$sql = "INSERT INTO jabatan_akademik VALUES ('".$id_jabatanakademik."','".$keterangan_jabatanakademik."')";
if (mysqli_query($db, $sql)) {
    echo "<script>
                    swal({
                        title: \"Sukses!\",
                        text: \"Data Jabatan Akademik Pegawai Berhasil Ditambah\",
                        type: \"success\"
                    },
                    function () {
                        window.location.href = 'attribut_pegawai.php';
                    });
                    </script>";
} else echo "<script>
                    swal({
                        title: \"Gagal!\",
                        text: \"Data Jabatan Akademik Pegawai Sudah Ada\",
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