<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 7/4/2016
 * Time: 8:47 AM
 */
session_start();
if( !isset($_SESSION["nama"]) ){
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>

</head>

<body>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="logout.php">Sign Out</a></li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content">
    <li><a href="logout.php">Sign Out</a></li>
</ul>
<nav class="white   ">
    <div class="nav-wrapper container">
        <a id="logo-container" href="admin.php" class="brand-logo"><img  class="img-rounded" src="img/rsz_1logo.png" alt="logo.png"></a>

        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

            <li class="active"><a href="menuservis.php"><i class="material-icons right">store</i>Menu Jasa Servis</a></li>

            <li><a href="menuuser.php"><i class="material-icons right">assignment_ind</i>Menu User</a></li>
            <li><a href="logout.php"><i class="material-icons right">markunread_mailbox</i>Pesan</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons">more_vert</i></a></li>

        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li class="active"><a href="menuservis.php"><i class="material-icons left">store</i>Menu Jasa Servis</a></li>

            <li><a href="menuuser.php"><i class="material-icons left">assignment_ind</i>Menu User</a></li>
            <li><a href="pesan.php"><i class="material-icons left">markunread_mailbox</i>Pesan</a></li>
            <li><a class="dropdown-content" href="#!" data-activates="dropdown1"><i class="material-icons left">more_vert</i>Settings</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <ul class="collapsible popout" data-collapsible="accordion">
        <li>
            <div class="collapsible-header"><i class="material-icons">assessment</i>Data Servis</div>
            <div class="collapsible-body">
                <p>menu validasi servis pelanggan dan melihat data servis pelanggan</p>
                <p><table>
                    <tr>
                        <td><a href="#modal6" class="btn modal-trigger ">Update Book</a></td>
                        <td><a href="#modal5" class="btn modal-trigger ">Tampilkan Data Servis<i class="material-icons right">pageview</i></a></td>
                        <td><a href="#modal7" class="btn modal-trigger ">Konfirmasi Booking<i class="material-icons right">right</i></a></td>
                        <td><a href="detail_servis.php" class="btn">Detail Servis<i class="material-icons right">pageview</i></a></td>
                    </tr>
                </table>



                </p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">note_add</i>Tambah Servis dan Sparepart</div>
            <div class="collapsible-body"><p>menu untuk menambah jenis layanan servis dan sparepart.</p>
                <p><a href="#modal1" class="btn-large modal-trigger ">Tambah Jasa Servis <i class="material-icons right">note_add</i></a>
                    <a href="#modal2" class="btn-large modal-trigger ">Tambah Sparepart <i class="material-icons right">note_add</i></a>
                </p>
            </div>
        </li>
        <li>

            <div class="collapsible-header"><i class="material-icons">description</i>Lihat Servis Dan Sparepart</div>
            <div class="collapsible-body">
                <p>Menu untuk melihat jasa servis yang disediakan dan sparepart.</p>
                <p><a href="#modal3" class="btn-large modal-trigger">Lihat Servis<i class="material-icons right">description</i></a>
                    <a href="#modal4" class="btn-large modal-trigger">Lihat Sparepart<i class="material-icons right">description</i></a></p>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">pageview</i>Update Servis dan Sparepart.</div>
            <div class="collapsible-body">
                <div class="container">
                    <p>Menu untuk memperbaiki jasa servis yang disediakan berdasarkan id servis.</p>
                    <form action="edit_servis.php" method="post">
                        <select name="id_servis">
                            <?php
                            $konek = mysqli_connect("localhost","root","","suzuki");
                            $query = "select id_servis,jenis_servis from servis";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[id_servis]>$data[jenis_servis]</option>";
                                }
                            }else{
                                echo "<option value=0>Data Ktp User tidak ada</option>";
                            }
                            ?>
                        </select>
                        <label>No Ktp User</label>
                        <button type="submit" class="btn">Search Servis<i class="material-icons right">pageview</i></button>
                    </form>
                    <p>Menu untuk memperbaiki sparepart yang disediakan berdasarkan id sparepart.
                    <form action="edit_sparepart.php" method="post">
                        <select name="id_sparepart">
                            <?php
                            $konek = mysqli_connect("localhost","root","","suzuki");
                            $query = "select id_sparepart,nama_sparepart from sparepart";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[id_sparepart]>$data[nama_sparepart]</option>";
                                }
                            }else{
                                echo "<option value=0>Data Ktp User tidak ada</option>";
                            }
                            ?>
                        </select>
                        <label>No Ktp User</label>
                        <button type="submit" class="btn">Search Servis<i class="material-icons right">pageview</i></button>
                    </form>
                    </p>

                </div>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">delete</i>Hapus Layanan Servis dan Sparepart.</div>
            <div class="collapsible-body">

                <div class="container">
                    <p>Menu untuk menghapus Layanan Servis berdasarkan id servis.</p>
                    <p><form action="delete_servis.php" method="post">
                        <div class="input-field col s12">
                            <select name="id_servis">
                                <?php
                                $konek = mysqli_connect("localhost","root","","suzuki");
                                $query = "select id_servis,jenis_servis from servis";
                                $hasil = mysqli_query($konek,$query);
                                if (mysqli_num_rows($hasil) > 0) {
                                    while($data=mysqli_fetch_array($hasil)){
                                        echo "<option value=$data[id_servis]>$data[jenis_servis]</option>";
                                    }
                                }else{
                                    echo "<option value=0>Empty</option>";
                                }
                                ?>
                            </select>
                            <label>Servis</label>
                        </div>
                        <button type="submit" class="btn">Hapus Servis<i class="material-icons right">delete</i></button>
                    </form>
                    <p>Menu untuk menghapus Sparepart berdasarkan id sparepart.</p>
                    <form action="delete_sparepart.php" method="post">
                        <div class="input-field col s12">
                            <select name="id_sparepart">
                                <?php
                                $konek = mysqli_connect("localhost","root","","suzuki");
                                $query = "select id_sparepart,nama_sparepart from sparepart";
                                $hasil = mysqli_query($konek,$query);
                                if (mysqli_num_rows($hasil) > 0) {
                                    while($data=mysqli_fetch_array($hasil)){
                                        echo "<option value=$data[id_sparepart]>$data[nama_sparepart]</option>";
                                    }
                                }else{
                                    echo "<option value=0>Empty</option>";
                                }
                                ?>
                            </select>
                            <label>Ganti Sparepart</label>
                        </div>
                        <button type="submit" class="btn">Hapus Sparepart<i class="material-icons right">delete</i></button>
                    </form>
                    </p>
                </div>
        </li>
    </ul>
</div>

</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Tambah Layanan Servis</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_servis.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" class="validate" name="jenis_servis" length="50" required>
                        <label>Jenis Servis</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="number" class="validate" name="harga_servis" length="12" required>
                        <label>Harga Servis</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="waves-effect waves-green right btn">Tambah</button>
                    <button type="reset" class="btn-flat  waves-effect">Clear</button>

                </div>
            </form>
        </div>
    </div>

</div>
<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Tambah Sparepart</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_sparepart.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" class="validate" name="nama_sparepart" length="50" required>
                        <label>Nama Sparepart</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="number" class="validate" name="harga_sparepart" length="12" required>
                        <label>Harga Sparepart</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="waves-effect waves-green right btn">Tambah</button>
                    <button type="reset" class="btn-flat  waves-effect">Clear</button>

                </div>
            </form>
        </div>
    </div>

</div>

<!-- Modal Structure -->
<div id="modal3" class="modal">
    <div class="modal-content">
        <h4>Lihat Jasa Servis</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
                            <thead>
                            <tr>
                                <th data-field="id_servis">Id Servis</th>
                                <th data-field="jenis_servis">Jenis Servis</th>
                                <th data-field="harga_servis">Harga Servis</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            require_once "connect.php";
                            require_once "rupiah.php";
                            $sql = "SELECT * FROM servis";
                            $result = mysqli_query($db, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                    <td>".@$row['id_servis']."</td>
                    <td>".@$row['jenis_servis']."</td>
                    <td>".format_rupiah(@$row['harga_servis'])."</td>
                    </tr>";
                                }
                            } else {
                                echo "Data Servis Kosong";
                            } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Lihat Data Sparepart</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
                            <thead>
                            <tr>
                                <th data-field="id_sparepart">ID Sparepart</th>
                                <th data-field="nama_sparepart">Nama Sparepart</th>
                                <th data-field="harga_sparepart">Harga Sparepart</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            require_once "connect.php";
                            require_once "rupiah.php";
                            $sql = "SELECT * FROM sparepart";
                            $result = mysqli_query($db, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                    <td>".@$row['id_sparepart']."</td>
                    <td>".@$row['nama_sparepart']."</td>
                    <td>".format_rupiah(@$row['harga_sparepart'])."</td>
                    </tr>";
                                }
                            } else {
                                echo "Data Sparepart Kosong";
                            } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal5" class="modal">
    <div class="modal-content">
        <h4>Data Booking Servis</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
                            <thead>
                            <tr>
                                <th data-field="id_book">Booking ID</th>
                                <th data-field="tanggal">Tanggal</th>
                                <th data-field="jam">Jam</th>
                                <th data-field="nama">Pemilik</th>
                                <th data-field="nopol">Nopol</th>
                                <th data-field="status">Status</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            require_once "connect.php";
                            $sql = " select booking.id_book,booking.tanggal,booking.jam,booking.nopol,user.nama,booking.status from booking natural join user ORDER BY tanggal DESC";
                            $result = mysqli_query($db, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                    <td>".@$row['id_book']."</td>
                    <td>".@$row['tanggal']."</td>
                    <td>".@$row['jam']."</td>
                    <td>".@$row['nama']."</td>
                    <td>".@$row['nopol']."</td>
                    <td>".@$row['status']."</td>
                    </tr>";
                                }
                            } else {
                                echo "Data Booking Kosong";
                            } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Structure -->
<div id="modal7" class="modal">
    <div class="modal-content">
        <h4>Data Booking Servis</h4>
        <div class="row">
            <form action="home1.php" method="post">
                <select name="no_book">
                    <?php
                    $konek = mysqli_connect("localhost","root","","suzuki");
                    $query = "select id_book from booking";
                    $hasil = mysqli_query($konek,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[id_book]>$data[id_book]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Booking Kosong</option>";
                    }
                    ?>
                </select>
                <label>No Booking</label>
                <!--
                                <input name="id_book">
                                <input name="id_servis">
                                <input name="id_sparepart">
                -->
                <select name="id_servis" id="servis">
                    <?php
                    $konek1 = mysqli_connect("localhost","root","","suzuki");
                    $query1 = "select id_servis,jenis_servis from servis";
                    $hasil1 = mysqli_query($konek1,$query1);
                    if (mysqli_num_rows($hasil1) > 0) {
                        while($data1=mysqli_fetch_array($hasil1)){
                            echo "<option value=$data1[id_servis]>$data1[jenis_servis]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Booking Kosong</option>";
                    }
                    ?>
                </select>
                <label id="servis" for="servis">No Booking</label>

                <select name="id_sparepart" id="sparepart">
                    <?php
                    $konek2 = mysqli_connect("localhost","root","","suzuki");
                    $query2 = "select id_sparepart,nama_sparepart from sparepart";
                    $hasil2 = mysqli_query($konek2,$query2);
                    if (mysqli_num_rows($hasil2) > 0) {
                        while($data2=mysqli_fetch_array($hasil2)){
                            echo "<option value=$data2[id_sparepart]>$data2[nama_sparepart]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Booking Kosong</option>";
                    }
                    ?>
                </select>
                <label id="sparepart" for="sparepart">Nama Sparepart</label>

                <button type="submit" class="btn">Update<i class="material-icons right">pageview</i></button>
            </form>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal6" class="modal">
    <div class="modal-content">
        <h4>Data Booking Servis</h4>
        <div class="row">
            <form action="update_book.php" method="post">
                <select name="status">
                    <?php
                    $konek = mysqli_connect("localhost","root","","suzuki");
                    $query = "select id_book from detail_book";
                    $hasil = mysqli_query($konek,$query);
                    if (mysqli_num_rows($hasil) > 0) {
                        while($data=mysqli_fetch_array($hasil)){
                            echo "<option value=$data[id_book]>$data[id_book]</option>";
                        }
                    }else{
                        echo "<option value=0>Data Booking Kosong</option>";
                    }
                    ?>
                </select>
                <label>No Booking</label>
                <button type="submit" class="btn">Update<i class="material-icons right">pageview</i></button>
            </form>
        </div>
    </div>
</div>



<!--  Scripts-->
<script   src="https://code.jquery.com/jquery-2.1.1.js"   integrity="sha256-FA/0OOqu3gRvHOuidXnRbcmAWVcJORhz+pv3TX2+U6w="   crossorigin="anonymous"></script>
<script src="js/materialize.js"></script>
<script>$(document).ready(function() {
        $('select').material_select();
    });</script>

<script>$('.modal-trigger').leanModal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
        }
    );
</script>
<script>$(document).ready(function(){
        $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
    });</script>
<script>$(".button-collapse").sideNav();</script>
</body>
</html>