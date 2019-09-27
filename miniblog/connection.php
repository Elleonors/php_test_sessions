<?php
include "./list.php";
session_start();
if($_GET['username']==="user"&&$_GET['password']==="userpassword"){
    $_SESSION['admin']="N";
    header("Location: $user");
} else if($_GET['username']==="admin"&&$_GET['password']==="adminpassword"){
    $_SESSION['admin']="Y";
    header("Location: $admin");
} else{
    echo "<script>alert('bad login or password');</script>";
    header("Location: $index");
}
?>