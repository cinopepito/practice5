<?php
function createTable(){
    global $connection;
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $password = $_POST['password'];
        $username = mysqli_real_escape_string($connection,$username);
        $password = mysqli_real_escape_string($connection,$password);

        $hashFormat = "$2y$10$";
        $salt = "iusersomecrazystrings22";
        $hashFormat_and_salt = $hashFormat . $salt;

        $password = crypt($password,$hashFormat_and_salt);
        $query = "INSERT INTO users(username,password) VALUES('$username','$password')";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die('query failed'.mysqli_error());
        }
    }
}

function readTable(){
    global $connection;
   
        $query = "SELECT * FROM users ";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die('query failed'. mysqli_error());
        }
        while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo"<option value='$id'>$id</option>";
        }
   
}

function updateTable(){
    global $connection;
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET username='$username', password='$password' WHERE id=$id ";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die('query failed'. mysqli_error());
        }
    }
        
}

function deleteTable(){
    global $connection;
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "DELETE users WHERE id=$id";
        $result = mysqli_query($connection,$query);
        if(!$result){
        die('query failed'. mysqli_error());
        }
    }
        
}
?>