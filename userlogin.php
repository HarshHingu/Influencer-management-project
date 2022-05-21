<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="influencer favicon.jfif">
    <title>Login</title>
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
  /* width: 100%; */
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
    <h1>Welcome</h1>
  </div>
  <div class="input_area">
   
    <form action="loginhandle.php" method="POST" >
 
        <br><br>
        <label for="useremail">Email: &nbsp;</label>
         <input type="text" id="useremail" name="useremail" required> <br> <br>

         <label for="password">password: &nbsp;</label>
         <input type="password" id="password" name="password" required> <br> <br>

         

         </div>
  <div class="actions">
  <button type="submit" value="submit">Login</button>
    <p>
      Don't have a account ?
      <a href="userregister.php" class="Sign_up_link">Sign Up</a>
      
    </p>
    <a href="adminlogin.php" class="Sign_up_link">Admin Login</a>

    </form>
  </div>
</div>
</body>
</html>