<?php
require 'dbconnect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];
    echo var_dump($_POST);
    $sql="SELECT * FROM `userdetail` WHERE `useremail` LIKE '$useremail'";
    $result = mysqli_query($conn,$sql);
    $num= mysqli_num_rows($result);
    // echo var_dump($result);
    if($num == 1){
        while ($row = mysqli_fetch_assoc($result)) {
            if($password == $row['password']){
                echo $row['password'];
                echo $row['useremail'];

              session_start();
              $_SESSION['loggedin'] = true;
              $_SESSION['username'] = $row['username'];
              $_SESSION['useremail'] = $row['useremail'];
              $_SESSION['userid'] = $row['userid'];
              header("location: viewcategoryfollowers.php?loginsucess=true");
              exit();
        }
        else{
            $showerror= "Invalid Credentials";
        }
    }
 }
 else{
     $showerror="User not found";
 }
 header("location:userlogin.php?sloginsucess=false&error=$showerror");
}
?>