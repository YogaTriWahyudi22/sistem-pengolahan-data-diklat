<?php 

include 'config/connection.php';

session_start();
if ( !isset($_SESSION['admin']) ) {
    header("location: login.php");
    die();
}



include 'component/header.php';
include 'component/sidebar.php';
include 'content.php';

include 'component/footer.php';
?>