<?php  
require 'dbconnect.php';

$showerror=false;
$showalert=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       $useremail = $_POST['useremail'];
       $password = $_POST['password'];
       $cpassword = $_POST['cpassword'];
       $username = $_POST['username'];
       $usergender = $_POST['usergender'];
       $existuser = "SELECT * FROM `userdetail` WHERE useremail='$useremail'";
       $result = mysqli_query($conn,$existuser);
       $numexistrows= mysqli_num_rows($result);
       if($numexistrows == 1){
           $showerror= "Email already exists";
       }
       else{
           if ($password == $cpassword) {
           $sql= "INSERT INTO `userdetail` ( `useremail`, `password`, `username`, `usergender`) VALUES ('$useremail', '$password', '$username', '$usergender');";
           $result = mysqli_query($conn,$sql);
           if($result){
               $showalert=true;
               header('location:userregister.php?signupsuccess=true');
               exit();
              
           }
           }
           else{
               $showerror = "Password does not match";
              
           }
       }
       header("location:userregister.php?signupsuccess=false&error=$showerror");
       
    }
    ?>