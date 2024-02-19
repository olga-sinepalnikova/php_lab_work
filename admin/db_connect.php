<?php 
$db = mysqli_connect("localhost", "root", "");
mysqli_select_db($db, "OSI_ste");  // Change db name if errors! Original was "OSI_site"
mysqli_query($db, "SET NAMES 'UTF-8'");
session_start();
?>