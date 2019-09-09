<?php
session_start();
if($_GET['username']==="user"&&$_GET['password']==="userpassword"){
    $_SESSION['admin']="N";
    header('Location: ./user.php');
} else if($_GET['username']==="admin"&&$_GET['password']==="adminpassword"){
    $_SESSION['admin']="Y";
    header('Location: ./admin.php');
} else{
    echo "<script>alert('bad login or password');</script>";
    header('Location: ./index.php');
}
?>