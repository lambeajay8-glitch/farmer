<?php
session_start();
include "db.php";

if(isset($_POST['login'])){
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM farmers WHERE mobile='$mobile'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($row && password_verify($password, $row['password'])){
        $_SESSION['farmer_id'] = $row['id'];
        echo "Login Successful ✅";
    }else{
        echo "Invalid Mobile or Password ❌";
    }
}
?>

