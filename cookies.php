<?php
$_COOKIE;
$name = "someName";
$value=100;
$expiration = time()+(60*60*24*7);
setcookie($name,$value,$expiration);
?>
<form action="" method="post">
    <?php 
    if(isset($_COOKIE['someName'])){
        $someOne = $_COOKIE['someName'];
        echo $someOne;
    } else{
        $someOne = "";
    }
     ?>
</form>