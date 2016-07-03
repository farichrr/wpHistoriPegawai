<?php
/**
 * Created by PhpStorm.
 * User: LUK
 * Date: 7/2/2016
 * Time: 12:48 PM
 */

function loginSuperadmin($user, $pass)
{
    global $db;
    $query = 'SELECT * FROM admin';
    $data = $db->query($query);
    $sukses = 0;
    $row = $data->fetch_assoc();
    foreach ($data as $row) {
        if ($user == $row['user'] && $pass == $row['pass']) {
            $sukses = 1;
            session_start();
            $_SESSION['user'] = $row['nim'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];
        }
    }
    if ($sukses == 1) {
        echo "<script>
alert('Berhasil Login');
window.location.href='menuadmin.php';
</script>";
    } else
        echo "<script>
alert('Username tidak ada atau password salah');
window.location.href='index.php';
</script>";
}
//function loginAdmin($user, $pass)
//{
//    global $db;
//    $query = 'SELECT * FROM admin';
//    $data = $db->query($query);
//    $sukses = 0;
//    $row = $data->fetch_assoc();
//    foreach ($data as $row) {
//        if ($user == $row['id_penjual'] && $pass == $row['pass']) {
//            $sukses = 1;
//            session_start();
//            $_SESSION['user'] = $row['id_penjual'];
//            $_SESSION['nama'] = $row['nama_penjual'];
//        }
//    }
//    if ($sukses == 1) {
//        echo "<script>
//alert('Berhasil Login');
//window.location.href='tampilMenuPenjual.php';
//</script>";
//    } else
//        echo "<script>
//alert('Username tidak ada atau password salah');
//window.location.href='index.php';
//</script>";
//}