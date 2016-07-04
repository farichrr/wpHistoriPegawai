<?php
require"connect.php";
function AutoID()
{
    global $db;
    $querycount="SELECT count(kode_tipepegawai) as LastID FROM tipe_pegawai";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdPegawai($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoId = "TP000".$num; break;
        case 2 : $NoId = "TP00".$num; break;
        case 3 : $NoId = "TP0".$num; break;
        default: $NoId = $num;
    }
    return $NoId;
}
echo IdPegawai(autoID());
?>

<?php
function autoIdStatus()
{
    global $db;
    $querycount="SELECT count(kode_statuspegawai) as LastID FROM status_pegawai";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdStatusPegawai($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoIdStatus = "S000".$num; break;
        case 2 : $NoIdStatus = "S00".$num; break;
        case 3 : $NoIdStatus = "S0".$num; break;
        default: $NoIdStatus = $num;
    }
    return $NoIdStatus;
}
echo IdStatusPegawai(autoIdStatus());
?>