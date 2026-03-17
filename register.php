<?php
include "db.php";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO farmers(name,mobile,password)
            VALUES('$name','$mobile','$password')";

    if(mysqli_query($conn,$sql)){
        echo "Registration Successful ✅";
    }else{
        echo "Error ❌";
    }
}
?>
