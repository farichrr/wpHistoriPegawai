
<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/14/2016
 * Time: 11:09 PM
 */
ob_start();

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
    <script src="js/sweetalert-min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    

</head>
<body>
<?php
session_start();
if( !isset($_SESSION["nama"]) ){
header("location:index.php");
exit();
}
?>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        
        <a id="logo-container" href="#" class="brand-logo"><img  class="" src="img/rsz_2logo.png" alt="logo.png"></a>
        <ul>
                <div class="nav-wrapper">

            <ul id="slide-out" class="side-nav right">
                <li><a href="daftar_pegawai.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Lihat Daftar Pegawai"><i class="material-icons left">supervisor_account</i>Daftar Pegawai</a></li>
                <li class="active"><a href="admin_home.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Registrasi Akun Pegawai Baru"><i class="material-icons left">person_pin</i>Tambah Pegawai</a></li>
                <li><a href="attribut_pegawai.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="tambah atribute pegawai"><i class="material-icons left">contacts</i>Attribute Pegawai</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="daftar_pegawai.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Daftar Pegawai"><i class="material-icons left">supervisor_account</i>Daftar Pegawai</a></li>
                <li class="active"><a href="admin_home.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Registrasi Akun Pegawai Baru"><i class="material-icons left">person_pin</i>Tambah Pegawai</a></li>
                 <li><a href="attribut_pegawai.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="tambah atribute pegawai"><i class="material-icons left">contacts</i>Attribute Pegawai</a></li>
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
                
                
                <h4>Tambah Pegawai</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_pegawai.php">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="user" type="text" class="validate">
                        <label>Username</label>
                    </div>
                    <div class="input-field col s6">
                            <input name="nama" type="text" class="validate">
                        <label>Nama Pegawai</label>
                    </div>
                    <div class="input-field col s12">
                       <select class="icons" name="level">
                          <option value="" disabled selected>Pilih Jabatan</option>
                          <option value="2" data-icon="img/dosen.png" class="circle">Dosen</option>
                          <option value="3" data-icon="img/staff.png" class="circle">Staff</option>                      
                        </select>
                        <label>Jabatan</label>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Tambah</button>
                </div>
            </form>
                </div>
                
                
                
                          <h4>Attribute Pegawai</h4>
        <div class="row">
            <ul class="collapsible popout" data-collapsible="accordion">
            <li>
              <div class="collapsible-header"><i class="material-icons">face</i>Tipe Pegawai</div>
              <div class="collapsible-body"><p>Menu untuk menambah tipe pegawai baru<br>
                  
                  
                  </p>
                                  <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="user">Username</th>
              <th data-field="pass">Password</th>
              <th data-field="nama">Nama</th>
              <th data-field="level">Keterangan</th>
          </tr>
        </thead>
        <tbody>
            <?php
                require_once "connect.php";
                $sql = "SELECT * FROM admin";
                $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if (@$row['level'] == 1 ){
                    @$row['level'] = "admin";
                } elseif (@$row['level'] == 2) {
                    @$row['level'] = "pegawai";
                } else @$row['level'] ="staff";
                    
                echo "<tr>
                    <td>".@$row['user']."</td>  
                    <td>".sha1(@$row['pass'])."</td>
                    <td>".@$row['nama']."</td>  
                    <td>".@$row['level']."</td>
                    </tr>";
                    }
                } else {
                    echo "Data Kosong";
            } ?>
          
        </tbody>
                    </table>
                </div>
                
            </li></ul>
        </div>    
            </div>
        </div>
    </div>
                    
                
                
                
                
               
      

<!-- Modal Structure -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Cari Track Record Motor dengan plat nomor</h4>
        <div class="row">
            <form class="col s12" method="post" action="cari_motor.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">label_outline</i>
                        <input name="nopol" id="nopol" type="text" class="validate" required >
                        <label for="nopol">No Polisi</label>
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

<script src="js/init.js"></script>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal4" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">search</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
    </ul>
</div>

    <script src="js/materialize.js"></script>
  

<script>var slider = document.getElementById('test5');
  noUiSlider.create(slider, {
   start: [500000],
   connect: true,
   step: 1,
   range: {
     'min': 500000,
     'max': 10000000
   },
   format: wNumb({
     decimals: 0
   })
  });</script>
<script>$(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
</script>
<script>$(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>
    <script>
     $(document).ready(function() {
    $('select').material_select();
  });
    </script>
    
    
    
</body>
</html>



