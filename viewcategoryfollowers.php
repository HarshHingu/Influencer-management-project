<?php
  session_start();
  if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
      header("location: userlogin.php");
      exit();
    }
  // if(!isset($_SESSION['loggedin'] )){

  //   header("location:userlogin.php");
  //   }
?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="" href="influencer favicon.jfif">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
       #img1{
            position: absolute;
            left: 40px;
            top: 235px;
            border: 1px solid black;
            height: 350px;
            width: 330px;
       }
       #img2{
            position: absolute;
            right: 63px;
            top: 245px;
            border: 1px solid black;
            height: 350px;
            width: 330px;
       }
       .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
.navbar{
  border:0px;
}
.navbar-custom {
    background-color: white;
}

        .navbar-nav {
            margin-left: auto;
        }
    </style>
    <title>Find influencer</title>
  </head>
  <body>
  <h3 id="titlebar" style="background-color: #e61c51; /*#ff4a4a;*/ border-color: black; border-style: ridge; padding: 0px 0px 0px 550px;">Find influencer website</h3>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="collapse navbar-collapse navbar-custom " id="navbarNav">
    <ul class="navbar-nav ">
    <li class="nav-item">
        <a class="nav-link" style="color:black; font-size: 20px;" href="register_as_influencer.php">Influencer Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black; font-size: 20px;" href="aboutus.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black; font-size: 20px;" href="contactus.php">Contact &nbsp;</a>
      </li>
      <a href="logout.php" role="button" class="btn btn-primary float-right " style="font-size: 20px;">Log out</a> <br>
    </ul>
  </div>
</nav>
    <!-- <h2><span id="homebar"> About  Contact </span></h2> -->
    <!-- <a href="logout.php" role="button" class="btn btn-primary float-right ">Log out</a> <br> -->
    <img id="img1" src="images/homeinfluencerone.jpg">
    <img id="img2" src="images/influencerimgthree.jpg">
   
    <!-- <div class="categoryclass" >
        
    <p id="anchorfirst"><a href="onetofivethousandpage.php">1,000-5,000 Followers</a></p>
    <p id="anchorsecond"><a href="fivetotenthousandpage.php">5,001-10,000 Followers</a></p>
    <p id="anchorthird"><a href="tentotwentythousandpage.php">10,001-20,000 Followers</a></p>
    <p id="anchorfourth"><a href="twentytofiftythousandpage.php">20,001-50,000 Followers</a></p>
    <p id="anchorfifth"><a href="fiftythousandpluspage.php">50,000+ Followers</a></p>
    </div> -->
    
    <div class="categoryclass" >
        
        <p id="anchorfirst"><a href="displayviewcategoryfollowers.php?no=onetofivethousand">1,000 - 5,000 Followers &nbsp;&nbsp;</a></p>
        <p id="anchorsecond"><a href="displayviewcategoryfollowers.php?no=fivetotenthousand">5,001 - 10,000 Followers&nbsp;&nbsp;</a></p>
        <p id="anchorthird"><a href="displayviewcategoryfollowers.php?no=tentotwentythousand">10,001 - 20,000 Followers</a></p>
        <p id="anchorfourth"><a href="displayviewcategoryfollowers.php?no=twentytofiftythousand">20,001 - 50,000 Followers</a></p>
        <p id="anchorfifth"><a href="displayviewcategoryfollowers.php?no=fiftythousandplus">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50,000+ Followers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
        </div>

        <div class="footer-dark">
          <footer>
            <div class="container">
              <div class="row">
                <div class="col-sm-6 col-md-3 item">
                        
                        <h3>Contact us</h3><br>
                        <p>Email: contact@findinfluencer.com</p>
                        <p>Phone number: +91 9322394326</p>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        
                        <h3>About us</h3>
                        <br>
                        <p>Find influencer website will help you find influencers who can promote your brand.</p>
                      </div>
                      <div class="col-md-6 item text">
                        <h3>Company Details</h3>
                        <br>
                        <p>Find influencer private limited</p>
                        <p>We are a Mumbai,India based company currently serving in India</p>
                      </div>
                    </div>
                    <p class="copyright">Find Influencer © 2022</p>
                  </div>
                </footer>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
              
              <!-- Optional JavaScript -->
              <!-- jQuery first, then Popper.js, then Bootstrap JS -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
           
            </body>
</html>