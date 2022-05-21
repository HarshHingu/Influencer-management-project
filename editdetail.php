<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="" href="influencer favicon.jfif">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Find influencer website</title>
    <style>
      body{
        background-color: #E1D9D1;
      }
    h2{
        background-color: #ff4a4a;
        border-color: black;
        border-style: ridge;
        padding: 0px 0px 0px 470px;
      }
    form{
        padding: 0px 0px 0px 410px;
    }
    
    .mybtnclassupdate{
      padding: 0px 0px 0px 320px; 
    }
    </style>
</head>

<body>
    <h2>Edit details</h2>
    <?php
    include 'dbconnect.php';
    //UPdate data 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $influencername = $_POST['influencername'];
        $influencermobile = $_POST['influencermobile'];
        $influenceremail = $_POST['influenceremail'];
        $followers = $_POST['followers'];
        $gender = $_POST['influencergender'];
        $platform = $_POST['platform'];
        $aboutinfluencer = $_POST['aboutinfluencer'];
        $id = $_POST['id'];
        $image = $_FILES['image'];
   
        $filename = $image['name'];
        $filepath = $image['tmp_name'];
        $fileerror = $image['error'];
    
        if($fileerror == 0){
            $destfile  = 'upload/'.$filename;
            // echo $destfile;
            move_uploaded_file($filepath, $destfile);
        }
        $followercategory = $_POST['followercategory'];
        $sql = "UPDATE `dbinfluencertable` SET `name`='$influencername',`mobile_no`='$influencermobile',`email`='$influenceremail',`followers`='$followers',`gender`='$gender',`platform`='$platform',`about`='$aboutinfluencer', `image` = '$destfile' ,`category`='$followercategory' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:adminpanel.php?update=success');
        }
        else{
            header('location:adminpanel.php?update=fail');
        }
    }


    //Get data from db
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // $sql = "SELECT * FROM `dbinfluencertabale` WHERE id= $id";
        $sql = "SELECT * FROM `dbinfluencertable` WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $gender = $row['gender'];
            $category = $row['category'];
            // echo var_dump($row);
    ?>
            <form action="editdetail.php" method="POST" enctype="multipart/form-data">
            <br>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="influencername">Name:</label>
                <input type="text" id="influencername" name="influencername" value="<?php echo $row['name']; ?>"> <br> <br>

                <label for="influencermobile">Mobile number:</label>
                <input type="tel" id="influencermobile" name="influencermobile" onkeypress="if(this.value.length==10) return false;" value="<?php echo $row['mobile_no']?>"> <br><br>

                <label for="influenceremail">email id:</label>
                <input type="email" id="influenceremail" name="influenceremail" value="<?php echo $row['email'] ?>"> <br> <br>

                <label for="followers">Followers count:</label>
                <input type="tel" id="followers" name="followers" value="<?php echo $row['followers']?>"> <br> <br>

                <label>Gender:</label>

                <input type="radio" id="male" name="influencergender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>
                <label for="male">Male</label>

                <input type="radio" id="female" name="influencergender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>
                <label for="female">Female</label>

                <input type="radio" id="other" name="influencergender" value="other" <?php if (isset($gender) && $gender=="other") echo "checked";?>>
                <label for="other">other</label> <br><br>

                <label for="platform">Platform of content creation:</label>
                <input type="text" id="platform" name="platform" value="<?php echo $row['platform']; ?>"> <br> <br>

                <label for="aboutinfluencer">About:</label>
                <input rows="5" cols="50" type="text" id="aboutinfluencer" name="aboutinfluencer" value="<?php echo $row['about'];?>" onkeypress="if(this.value.length==300) return false;"></input> <br> <br>

                <label for="image">Upload Image:</label> 
                <input type="file" name="image" id="image" value="<?php echo $row['image'];?>"> 
                
                <div><img src="<?php echo $row['image'];?>" alt="There supposed to be Image here" width="250" height="210">
                    </div>
                <br> <br>


                <label for="followercategory">Category of followers:</label>
                <select name="followercategory" id="followercategory">
                    <option value="onetofivethousand" <?php if (isset($category) && $category=="onetofivethousand") echo "selected";?>>1,000-5,000 Followers</option>
                    <option value="fivetotenthousand" <?php if (isset($category) && $category=="fivetotenthousand") echo "selected";?>>5,001-10,000 Followers</option>
                    <option value="tentotwentythousand" <?php if (isset($category) && $category=="tentotwentythousand") echo "selected";?>>10,001-20,000 Followers</option>
                    <option value="twentytofiftythousand" <?php if (isset($category) && $category=="twentytofiftythousand") echo "selected";?>>20,001-50,000 Followers</option>
                    <option value="fiftythousandplus" <?php if (isset($category) && $category=="fiftythousandplus") echo "selected";?>>50,000+ Followers</option>
                </select> <br> <br>

                <div class="mybtnclassupdate"><button type="submit" value="submit">Update</button> </div> <br> <br>
            </form>
    <?php
        } else {
            echo "Fail to load";
        }
    }
    ?>
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