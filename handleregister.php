<?php  
include 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $influencername = $_POST['influencername'];
    $influencermobile = $_POST['influencermobile'];
    $influenceremail = $_POST['influenceremail'];
    $followers = $_POST['followers'];
    $gender = $_POST['influencergender'];
    $platform = $_POST['platform'];
    $aboutinfluencer = $_POST['aboutinfluencer'];
    // $image = $_POST['image'];
    // $file = $_FILES['image']['tmp_name'];
    $followercategory = $_POST['followercategory'];        
    $image = $_FILES['image'];
   
    $filename = $image['name'];
    $filepath = $image['tmp_name'];
    $fileerror = $image['error'];

    if($fileerror == 0){
        $destfile  = 'upload/'.$filename;
        // echo $destfile;
        move_uploaded_file($filepath, $destfile);
        // $sql = "INSERT INTO `imgcrud` (`name`, `pic`) VALUES ('$name', '$destfile')";        
        $sql = "INSERT INTO `dbinfluencertable` (`name`, `mobile_no`, `email`, `followers`, `gender`, `platform`, `about`,`image`, `category`)
        VALUES ( '$influencername', '$influencermobile', '$influenceremail', '$followers', '$gender', '$platform', '$aboutinfluencer','$destfile', '$followercategory');";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
                        echo("Success inserted Data");
                        header("location: register_as_influencer.php?register=success");
                    }
                    else{
                        echo"Data not inserted";
                        header("location: register_as_influencer.php?register=fail");
                    }
       

    }
    



}
?>