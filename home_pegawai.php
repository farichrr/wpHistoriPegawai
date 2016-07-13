<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/14/2016
 * Time: 11:09 PM
 */
session_start();
if( !isset($_SESSION["nama"]) ){
    header("location:index.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Histori Pegawai</title>




    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">

        <a id="logo-container" href="#" class="brand-logo"><img  class="" src="img/rsz_2logo.png" alt="logo.png"></a>
        <ul>
            <div class="nav-wrapper">

                <ul id="slide-out" class="side-nav right">
                    <li class="active"><a href="#" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Lihat Daftar Pegawai"><i class="material-icons left">supervisor_account</i>Daftar Pegawai</a></li>
                    <li><a href="admin_home.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Registrasi Akun Pegawai Baru"><i class="material-icons left">person_pin</i>Tambah Pegawai</a></li>
                    <li  ><a href="attribut_pegawai.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="tambah atribute pegawai"><i class="material-icons left">contacts</i>Attribute Pegawai</a></li>
                    <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li class="active"><a href="daftar_pegawai.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Daftar Pegawai"><i class="material-icons left">supervisor_account</i>Daftar Pegawai</a></li>
                    <li><a href="admin_home.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Registrasi Akun Pegawai Baru"><i class="material-icons left">person_pin</i>Tambah Pegawai</a></li>
                    <li  ><a href="attribut_pegawai.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="tambah atribute pegawai"><i class="material-icons left">contacts</i>Attribute Pegawai</a></li>
                    <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </ul>
    </div>
</nav>

<div class="section">
    <div class="container">
        <div class="row">
            <?php
                require_once "connect.php";
                $sql = "SELECT * FROM detail_pegawai";
                $result = $db->query($sql);
                $num = $result->num_rows;
                $data = mysqli_query($db,$sql);
                $row=mysqli_fetch_row($data);


            ?>

            <h4>Data Pegawai</h4>
            <div class="row">
                <form class="col s12" method="post" action="update_datapegawai.php">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input name="nama" type="text" class="validate"  value="<?php echo $_SESSION['nama'];?>" readonly>
                        <label for="icon_prefix">Nama Pegawai</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">store</i>
                        <input name="nip" type="number" class="validate">
                        <label for="icon_prefix">No Rekening CIMB</label>
                    </div>
                    <div class="file-field input-field col s6">
                            <div class="btn">
                                <i class="material-icons right">perm_media</i><span>Foto</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                    </div>
                    <div class="input-field col s6">
                        <select name="jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        <label>Jenis Kelamin</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
                        <label>Agama</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">store</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Tempat Tanggal lahir</label>
                    </div>
                    <div class="input-field col s2">
                        <input name="tanggal_lahir" type="date" class="datepicker" placeholder="Tanggal Lahir">

                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix">mail</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Email1</label>
                    </div>
                    <div class="input-field col s3">
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Email2</label>
                    </div>
                    <div class="input-field col s3">
                        <i class="material-icons prefix">phone</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Telp1</label>
                    </div>
                    <div class="input-field col s3">
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Telp2</label>
                    </div>
                    <div class="input-field col s8">
                        <i class="material-icons prefix">store</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Alamat Malang</label>
                    </div>
                    <div class="input-field col s4">
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Kode Pos Malang</label>
                    </div>
                    <div class="input-field col s8">
                        <i class="material-icons prefix">store</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Alamat Asal</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">store</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Kode Pos Asal</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">store</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Negara Asal</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">store</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Propinsi Asal</label>
                    </div>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">store</i>
                        <input name="tempat" type="text" class="validate">
                        <label for="icon_prefix">Kota Asal</label>
                    </div>

                    <div class="input-field col s6">
                        <select name="unit">
                            <?php
                            $konek = mysqli_connect("localhost","root","","histori_pegawai");
                            $query = "select * from status_pegawai";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[kode_statuspegawai]>$data[keterangan]</option>";
                                }
                            }else{
                                echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                            }
                            ?>
                        </select>
                        <label>Tipe Pegawai</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">people</i>
                        <input name="nip" type="number" class="validate"  value="<?php echo $row[0];?>">
                        <label for="icon_prefix">NIP</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">people</i>
                        <input name="nip" type="number" class="validate"  value="<?php echo $row[0];?>">
                        <label for="icon_prefix">NIP</label>
                    </div>

                    <div class="modal-footer">

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">

    </div>
</div>

<!-- Modal Structure -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Cari Track Record Pegawai dengan NIP</h4>
        <div class="row">
            <form class="col s12" method="post" action="cari_motor.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">label_outline</i>
                        <input name="nip" id="nip" type="number" class="validate" required >
                        <label for="nip">NIP</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">search</i>Cari</button>

                </div>
            </form>
        </div>
    </div>
</div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>




<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/compressed/picker.js"></script>
<script src="js/compressed/picker.date.js"></script>

<script src="js/compressed/picker.time.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });

    $(document).ready(function() {
        $('select').material_select();

        $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
        });
    });</script>

</body>
</html>



