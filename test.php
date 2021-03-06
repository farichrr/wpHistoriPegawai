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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-1.12.3.js"></script>    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#unit').DataTable( {
		"processing": true,
		"serverSide": true,
		"ajax": "objects.php",
		"columns": [
			{ "data": "kode_unit" },
			{ "data": "keterangan" },
            
		]
	} );
} );

	</script>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        
        <a id="logo-container" href="#" class="brand-logo"><img  class="img-rounded" src="img/logo.png" alt="logo.png"></a>
        <ul>
                <div class="nav-wrapper">

            <ul id="slide-out" class="side-nav right">
                <li><a href="daftar_pegawai.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Lihat Daftar Pegawai"><i class="material-icons left">supervisor_account</i>Daftar Pegawai</a></li>
                <li><a href="admin_home.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Registrasi Akun Pegawai Baru"><i class="material-icons left">person_pin</i>Tambah Pegawai</a></li>
                <li  class="active"><a href="attribut_pegawai.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="tambah atribute pegawai"><i class="material-icons left">contacts</i>Attribute Pegawai</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="daftar_pegawai.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Daftar Pegawai"><i class="material-icons left">supervisor_account</i>Daftar Pegawai</a></li>
                <li><a href="admin_home.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Registrasi Akun Pegawai Baru"><i class="material-icons left">person_pin</i>Tambah Pegawai</a></li>
                 <li  class="active"><a href="attribut_pegawai.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="tambah atribute pegawai"><i class="material-icons left">contacts</i>Attribute Pegawai</a></li>
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
                <h4>Attribute Pegawai</h4>
            <table id="unit" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
               
            </tr>
        </thead>
    </table>
        
            </div>
        </div>
    </div>
                             
    <!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Tambah Tipe Pegawai</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_tipepegawai.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">note_add</i>
                        <input name="tipe_pegawai" id="tipe_pegawai" type="text" class="validate" required >
                        <label for="tipe_pegawai">Tipe Pegawai</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">add</i>Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
           <!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Data Tipe Pegawai</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="kode_tipepegawai">Kode Pegawai</th>
              <th data-field="keterangan">Keterangan Unit</th>
          </tr>
        </thead>
        <tbody>
            <?php
                require_once "connect.php";
                $sql = "SELECT * FROM tipe_pegawai";
                $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>".@$row['kode_tipepegawai']."</td>  
                    <td>".@$row['keterangan']."</td>
                    </tr>";
                    }
                } else {
                    echo "Data Kosong";
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
<div id="modal3" class="modal">
    <div class="modal-content">
        <h4>Tambah Unit Pegawai</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_unitpegawai.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">store</i>
                        <input name="kode_unit" id="kode_unit" type="text" class="validate" required >
                        <label for="kode_unit">Kode Unit</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">note</i>
                        <input name="unit_pegawai" id="unit_pegawai" type="text" class="validate" required >
                        <label for="unit_pegawai">Unit Pegawai</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">add</i>Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
           <!-- Modal Structure -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Data Unit Pegawai</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                         <table id="unit" class="display highlight centered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Kode Unit</th>
                        <th>Keterangan Unit</th>
					</tr>
				</thead>
                            
			</table>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
    
    
<!-- Modal Structure -->
<div id="modal10" class="modal">
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

<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal4" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">search</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
    </ul>
</div>

    
    

    <script src="js/compressed/picker.js"></script>
    <script src="js/compressed/picker.date.js"></script>
    
    <script src="js/compressed/picker.time.js"></script>


<script>$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
        </script>
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
    <script>$(document).ready( function () {
    $('#table_id').DataTable();
} );</script>
    
</body>
</html>



