<?php
$host = "127.0.0.1";
$user = "root";
$pass = "trinity";
$connection = mysqli_connect($host,$user,$pass);
?>
<?php 
$db = mysqli_select_db($connection,"cms");
?>
