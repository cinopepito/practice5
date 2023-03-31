<?php
include('db.php');
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $password = $_POST['password'];
  $query = "INSERT INTO users(username,password) VALUES('$username','$password')";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die('query failed'.mysqli_error());
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <form action="" method="post">
        Name : <input type="text" name='name'><br>
        Password : <input type="text" name="password" id=""><br>
        <input type="submit" name='submit'>
    </form>
</body>
</html>