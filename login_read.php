<?php
include('db.php');
    $query = "SELECT * FROM users ";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die('query failed'. mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
    print_r($result);
}
?>
