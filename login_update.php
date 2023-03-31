<?php
include('db.php');
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $password = $_POST['password'];
    $query = "UPDATE USERS SET username='$username', password='$password' WHERE id=$id";
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

        <select name="name" id="">
            <option value="">
                <?php  
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    echo "<option value='$id'>$id</option>";
                }
                ?>
            </option>
        </select>
        <input type="submit" name='submit'>
    </form>
</body>
</html>