<?php
$host = "127.0.0.1";
$user = "root";
$pass = "trinity";
$connection = mysqli_connect($host,$user,$pass);
if (!$connection){
    die("<h1>Unable to connect to this page, please ask your webmaster for assistance.<h1>");
}
?>
<?php 
$db = mysqli_select_db($connection,"cms");
if (!$db){
    die("Unable to select database 'cms', it is either missing, or misspelled.");
}
?>
