<?php
session_start();

$_SESSION['registrado'] = true;
header('location: ../index.php');
exit;
?>