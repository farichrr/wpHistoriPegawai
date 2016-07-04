<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 7/4/2016
 * Time: 8:55 AM
 */


    session_start();
    session_unset();
    session_destroy();
    header("location:index.php");
?>