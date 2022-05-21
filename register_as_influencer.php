<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="" href="influencer favicon.jfif">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Register as influencer</title>
    <style>
      body{
        background-color: #E1D9D1;
      }
    h2{
        background-color: #ff4a4a;
        border-color: black;
        border-style: ridge;
        padding: 0px 0px 0px 490px;
      }
    form{
        font-size: 18px;
        font-weight: 500;
        padding: 0px 0px 0px 450px;
    }
    
    .mybtnclass{
      padding: 0px 0px 0px 330px; 
      
    }
    button{
      color: #000000;
      background-color: #ff4a4a;
      border: 1px solid lightblue;
      font-weight: 500;
    }

    input {font-weight: 500;}
    </style>
  </head>
  <body>
  <h2>Register as influencer</h2>
      <?php
    if(isset($_GET['register']) && $_GET['register'] == 'success'){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are registered on our website as influencer
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
?>


 <form action="handleregister.php" method="POST" enctype="multipart/form-data">
 
 <br>
    <label for="influencername">Name: &nbsp;</label>
  <input type="text" id="influencername" name="influencername" required> <br> <br>

  <label for="influencermobile">Mobile number: &nbsp; &nbsp;</label>
  <input type = "tel" id="influencermobile" name="influencermobile" onkeypress="if(this.value.length==10) return false;" required> <br> <br>

  <label for="influenceremail">email id: &nbsp; &nbsp;</label>
  <input type="email" id="influenceremail" name="influenceremail" required> <br> <br>

  <label for="followers">Followers count: &nbsp; &nbsp;</label>
  <input type="tel" id="followers" name="followers"> <br> <br>

  <label>Gender: &nbsp; &nbsp;</label>
  
  <input type="radio" id="male" name="influencergender" value="male">
  <label for="male">Male</label>

  <input type="radio" id="female" name="influencergender" value="female">
  <label for="female">Female</label>

  <input type="radio" id="other" name="influencergender" value="other">
  <label for="other">other</label> <br> <br>

  <label for="platform">Platform of content creation:</ &nbsp; &nbsp;label>
  <input type="text" id="platform" name="platform"> <br> <br>

  <label for="aboutinfluencer">About: </label> <br>
  <textarea rows="5" cols="50" type="text" id="aboutinfluencer" name="aboutinfluencer" placeholder="Max 300 characters" onkeypress="if(this.value.length==300) return false;"></textarea> <br> <br>

  <label for="image">Upload Image: &nbsp; &nbsp;</label>
  <input type="file" name="image" id="image"> <br> <br>
  

  <label for="followercategory">Category of followers:</label>
        <select name="followercategory" id="followercategory">
            <option value="onetofivethousand">1,000-5,000 Followers</option>
            <option value="fivetotenthousand">5,001-10,000 Followers</option>
            <option value="tentotwentythousand">10,001-20,000 Followers</option>
            <option value="twentytofiftythousand">20,001-50,000 Followers</option>
            <option value="fiftythousandplus">50,000+ Followers</option>
        </select> <br> <br>

       <div class="mybtnclass"> <button type="submit" value="submit">Submit</button> </div> <br><br>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

    
  </body>
</html>
