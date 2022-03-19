<?php
session_start();
$root=$_SESSION['DOCUMENT_ROOT'];
header("Location: $root/ERP/");
?>
