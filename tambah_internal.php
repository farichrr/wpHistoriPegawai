<?php
    require_once "connect.php";
    
    session_start();

?>

<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Histori Pegawai</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    
    </head>
<body>
    <div class="container">
       <form class="col s12" method="post" action="internal_pangkat.php">
           <?php echo "<h1> Tambah Data Internal </h1> ";?>
                <div class="row">
                    <div class="col s12">
                    <input type="text" class="col s12" name="pangkat">
                </div>
                     <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Tambah</button>
                </div>
            </div>
           <a class="btn btn-flat waves-effect" href="profile.php">Kembali</a>
        </form>
        </div>
    </body>
</html>