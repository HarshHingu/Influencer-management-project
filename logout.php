<?php
session_start();
if(isset($_SESSION['admin'] )){
  unset($_SESSION['admin']);
  header("location:adminlogin.php");
}
if(isset($_SESSION['loggedin'] )){
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    unset($_SESSION['useremail']);
    unset($_SESSION['userid']);
    header("location:userlogin.php");
}

?>