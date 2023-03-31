<?php
$connection = mysqli_connect('localhost','root','','basededonne');
if(!$connection){
    die('connection failed' . mysqli_error());
}
?>