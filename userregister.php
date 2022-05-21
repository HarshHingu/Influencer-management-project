<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="" href="influencer favicon.jfif">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Signup</title>
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
  padding: 10px 20px;
  justify-content: center;
  flex-direction: column;
  min-height: 60vh;
  border-radius: 10px;
}
.header {
  padding: 10px 0 30px 0;
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
.login_link, .influencer_link {
  font-weight: 500;
  color: #14b397;
  text-decoration: none;
}

    </style>
  </head>
  <body>


   
<div class="container">
  <div class="header">
    <h1>Welcome</h1>
    <?php
    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == 'true'){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are registered on our website
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }

    if(isset($_GET['error']) && $_GET['signupsuccess'] == 'false'){
      $error = $_GET['error'];
      echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Failed!</strong> '.$error.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>';
  }
?>
  </div>
  <div class="input_area">

  <form action="signuphandle.php" method="POST" >
 
 <br>
 <label for="useremail">Email: &nbsp;</label>
  <input type="text" id="useremail" name="useremail" required> <br> <br>

    <label for="username">Name: &nbsp;</label>
  <input type="text" id="username" name="username" placeholder="Full Name" required> <br> <br>

  <label for="password"> &nbsp; &nbsp;password: &nbsp;</label>
  <input type="password" id="password" name="password" required> <br> <br>

  <label for="cpassword"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Confirm password: &nbsp;</label>
  <input type="cpassword" id="cpassword" name="cpassword" required> <br> <br>

  <label> &nbsp; &nbsp; &nbsp; &nbsp;Gender: &nbsp; &nbsp;</label>

  <input type="radio" id="male" name="usergender" value="male">
  <label for="male">Male</label> &nbsp;

  <input type="radio" id="female" name="usergender" value="female">
  <label for="female">Female</label>  &nbsp;

  <input type="radio" id="other" name="usergender" value="other">
  <label for="other">other</label> <br> 

  

  </div>
  <div class="actions">
  <button type="submit" value="submit">Register</button> <br><br>
    <p>
       Have an account Signin
      <a href="userlogin.php" class="login_link">Log in</a>
    </p>

    <p>
       For influencer registration
      <a href="register_as_influencer.php" class="influencer_link">Register</a>
    </p>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>