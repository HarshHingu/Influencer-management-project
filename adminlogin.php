<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="influencer favicon.jfif">
    <title>Admin Login</title>
    <style> 
     * {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  outline: none;
}
body {
  display: flex;
  background-color: #2b3137;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  overflow: hidden;
}
.container {
  display: flex;
  background: white;
  box-sizing: border-box;
  padding: 80px 400px;
  justify-content: center;
  flex-direction: column;
  min-height: 60vh;
  border-radius: 10px;
}
.header {
  padding: 30px 0 30px 0;
  text-align: center;
}
.header h1 {
  font-size: 21px;
}
.input_area {
  display: flex;
  flex-direction: column;
  justify-content: stretch;
  align-content: center;
  text-align: center;
}
.input_area input {
  margin: 10px 0;
  border: 1px grey solid;
  border-radius: 20px;
  padding: 5px 10px;
  font-size: 12px;
  outline: none;
  color: grey;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.actions {
  text-align: center;
  padding: 30px 0 10px 0;
}
.actions button {
  background-color: #1aebb6;
  border: none;
  border-radius: 20px;
  padding: 5px 25px;
  cursor: pointer;
}
.actions p {
  font-size: 13px;
}
.Sign_up_link {
  font-weight: 500;
  color: #14b397;
  text-decoration: none;
}

    </style>
</head>
<body>
<div class="container">
  <div class="header">
    <h1>Admin Login</h1>
  </div>
  <div class="input_area">
    <form action="adminlogin.php" method="POST" >
 
        <br><br>
        <label for="adminemail">Email: &nbsp;</label>
         <input type="text" id="adminemail" name="adminemail" required> <br> <br>

         <label for="adminpassword">password: &nbsp;</label>
         <input type="password" id="adminpassword" name="adminpassword" required> <br> <br>

         </div>
  <div class="actions">
  <button type="submit" value="submit">Login</button>
    <p> For user
      <a href="userlogin.php" class="Sign_up_link">User Login</a>
      
    </p>
    
    </form>
  </div>
</div>


<?php
require 'dbconnect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $adminemail = $_POST['adminemail'];
    $adminpassword = $_POST['adminpassword'];
    // echo var_dump($_POST);
    $sql="SELECT * FROM `admindetail` WHERE `adminemail` LIKE '$adminemail'";
    $result = mysqli_query($conn,$sql);
    $num= mysqli_num_rows($result);
    if($num == 1){
        while ($row = mysqli_fetch_assoc($result)) {
            if($adminpassword == $row['adminpassword']){
                // echo $row['password'];
                // echo $row['useremail'];

              session_start();
              $_SESSION['admin'] = true;
              header("location: adminpanel.php?loginsucess=true");
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
 header("location:adminlogin.php?sloginsucess=false&error=$showerror");
}
?>

</body>
</html>