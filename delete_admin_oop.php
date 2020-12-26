<?php 
ob_start();

include('includes/class.php');
$d=new admin();
$d->delete($_GET['id']);



?>