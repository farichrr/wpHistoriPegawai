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
    /**
     * Created by PhpStorm.
     * User: LUK
     * Date: 7/2/2016
     * Time: 12:31 PM
     */
        require_once "connect.php";
        require_once "function.php";
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $query = 'SELECT * FROM admin';
        $data = $db->query($query);
        print_r($_POST);
        $row = $data->fetch_assoc();
            foreach ($data as $row) {
                if ($username == $row['user'] && $password == $row['pass']) {
                    session_start();
                    $_SESSION['nama'] = $row['nama'];
                    $_SESSION['level'] = $row['level'];

                }
            }
                if ($_SESSION['level'] == 1) {
                    echo "<script>
                        swal({
                            title: \"Login Sukses!\",
                            text: \"Selamat Datang $username\",
                            type: \"success\"
                         },
                    function () {
                        window.location.href = 'admin_home.php';
                    });
                        </script>";
                } elseif ($_SESSION['level'] > 1) {
                    echo "<script>
                         swal({
                            title: \"Login Sukses!\",
                            text: \"Selamat Datang $username\",
                            type: \"success\"
                        },
                    function () {
                        window.location.href = 'home_pegawai.php';
                    });
                        </script>";
                } else {echo "<script>
                        swal({
                            title: \"Gagal!\",
                            text: \"Username atau Password Salah\",
                            type: \"error\"
                        },
                    function () {
                        window.location.href = 'index.php';
                    });
                    </script>";}
    ?>
</body>
</html>