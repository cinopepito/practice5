<?php
$connection = mysqli_connect('localhost','root','','baseDedonne');
if(!$connection){
    die('connection failed' . mysqli_error());
}
?>