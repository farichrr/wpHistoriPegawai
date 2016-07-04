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
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        
        <a id="logo-container" href="#" class="brand-logo"><img  class="" src="img/rsz_2logo.png" alt="logo.png"></a>
        <ul>
                <div class="nav-wrapper">

            <ul id="slide-out" class="side-nav right">
                <li class="active"><a href="daftar_pegawai.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Lihat Daftar Pegawai"><i class="material-icons left">supervisor_account</i>Daftar Pegawai</a></li>
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
                
                
                <h4>Daftar Pegawai</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_pegawai.php">
                <div class="row">
                    
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

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal4" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Cari Riwayat Pegawai">search</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
    </ul>
</div>

    
    
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/compressed/picker.js"></script>
    <script src="js/compressed/picker.date.js"></script>
    
    <script src="js/compressed/picker.time.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

    <script>
    $('.datepicker').pickadate();
    $('.timepicker').pickatime({
         min: [8,0],
         max: [15,0],
         interval: 15,
        formatLabel: function(time) {
    var hours = ( time.pick - this.get('now').pick ) / 60,
      label = hours < 0 ? ' !hours to now' : hours > 0 ? ' !hours from now' : 'now'
    return  'h:i a <sm!all>' + ( hours ? Math.abs(hours) : '' ) + label +'</sm!all>'
  }
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



