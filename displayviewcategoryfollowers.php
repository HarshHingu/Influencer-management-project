<?php
  session_start();
  if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
      header("location: userlogin.php");
      exit();
    }
   
?>

<!DOCTYPE html>
<html>

<head>
<link rel="icon" type="" href="influencer favicon.jfif">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Find Influencer website</title>
    <style type="text/css">
        #telusko-about{
            margin: 18px 0px 0px 30px;
        }
        .using-flex {
        /* display: flex;
        border-style: ridge; */
        background-color:  #1aebb6;
        font-weight: bold;
        /* border-color: #e8e8e8; */
        }
        h1{
           background-color: #e61c51;  
        }
    </style>
</head>

<body>
    <?php
    include 'dbconnect.php';

    if(isset($_GET['no'])){
        $catfollowno = $_GET['no'];
        if($catfollowno == 'onetofivethousand'){
            echo'<h1>1000-5000 followers</h1>';
        }
        elseif ($catfollowno == 'fivetotenthousand') {
            echo'<h1>5001-10000 followers</h1>';            
        }
        elseif ($catfollowno == 'tentotwentythousand') {
            echo'<h1>10001-20000 followers</h1>';            
        }
        elseif ($catfollowno == 'twentytofiftythousand') {
            echo'<h1>20000-50000 followers</h1>';            
        }
        elseif ($catfollowno == 'fiftythousandplus') {
            echo'<h1>50000+ followers</h1>';            
        }
        // SELECT * FROM `dbinfluencertable` WHERE `category` LIKE 'onetofivethousand'
        $sql= "SELECT * FROM `dbinfluencertable` WHERE `category` LIKE '$catfollowno'";
        $result= mysqli_query($conn,$sql);
        $numrows = mysqli_num_rows($result);
        if($numrows > 0){
            while($row = mysqli_fetch_assoc($result)){   
                echo '
                <!-- Data  Box from db  -->
            
                
                
                <!-- 1st box  -->
            
                <div class="using-flex">
                
                    <div><img src="'.$row['image'].'" alt="There supposed to be Image here" width="230" height="210">
                    </div>
                      <div>
                        <p class="name-id"> Name:'. $row['name'] .'</p>
                        <p class="name-id"> Mobile no:'. $row['mobile_no'] .'</p>
                        <p class="name-id"> Email:'. $row['email'] .'</p>
                        <p class="name-id"> Followers count:'. $row['followers'] .'</p>
                        <p class="name-id"> Gender:'. $row['gender'] .'</p>
                        <p class="name-id"> Platform of content creation:'. $row['platform'] .'</p>
                      </div>
                    <div id="Content-about">
                        <p>About:</p>
                        <p>'. $row['about'] .'</p>
                    </div>
                </div>';                     
    ?>

<?php
}
}
}
?>
    <!-- //<h1>Hi this is commented code</h1> -->
    <!-- <h1>1,000-5,000 Followers</h1>
    
    1st box 

    <div class='using-flex'>
        <div><img src='mysirgimage.jfif' alt='mysirg Image' width='250' height='210'>
        </div>
          <div>
            <p class="name-id"> Name:Saurabh Shukla </p>
            <p class="name-id"> Mobile no:8012345678 </p>
            <p class="name-id"> Email:sshukla_manit@yahoo.com </p>
            <p class="name-id"> Followers count: 7,31,000 </p>
            <p class="name-id"> Gender: Male </p>
            <p class="name-id"> Platform of content creation: Youtube </p>
          </div>
        <div id="Content-about">
            <p>About:</p>
            <p>Hi this is Saurabh Shukla and I am a teacher and I teach programming to students and I make programming
                related
                videos on youtube.</p>
        </div>
    </div>

    2nd box 

    <div class='using-flex'>
        <div><img src='teluskoimage.jfif' alt='telusko Image' width='250' height='210'>
        </div>
         <div>
            <p class="name-id"> Name:Navin Reddy </p>
            <p class="name-id"> Mobile no:8012345671 </p>
            <p class="name-id"> Email:connect@telusko.com </p>
            <p class="name-id"> Followers count: 16,00,000 </p>
            <p class="name-id"> Gender: Male </p>
            <p class="name-id"> Platform of content creation: Youtube </p>
         </div>
        <div id="Content-about">
            <p id="telusko-about">About:</p>
            <p id="telusko-about">I make free programming tutorials from beginner to advanced level.That includes Java for beginner, Advanced Java, Python, Android, Blockchain, JavaScript, Kotlin, Scala, Spring Framework, Hibernate, C programming, Data Structures, Networking, REST API, and many more.</p>
         
        </div>
    </div>
    3rd box 

    <div class='using-flex'>
        <div><img src='codewithharryimage.jfif' alt='codewithharry Image' width='250' height='210'>
        </div>
    
         <div>
            <p class="name-id"> Name:Harris Khan </p>
            <p class="name-id"> Mobile no:8012345672 </p>
            <p class="name-id"> Email:harry@codewithharry.com </p>
            <p class="name-id"> Followers count: 24,00,000 </p>
            <p class="name-id"> Gender: Male </p>
            <p class="name-id"> Platform of content creation: Youtube </p>
         </div>
        <div id="Content-about">
            <p>About:</p>
            <p>Code With Harry is my attempt to teach basics and those coding techniques to people in short time which took me ages to learn.At Code With Harry, I provide a quick and to the point demo along with resources of anything and everything I teach. </p>
        </div>
    </div>

    4th box 

   <div class='using-flex'>
        <div><img src='amandhattarwalimage.jfif' alt='amandhattarwal Image' width='250' height='210'>
        </div>
    
         <div>
            <p class="name-id"> Name:Aman Dhattarwal</p>
            <p class="name-id"> Mobile no:8012345673 </p>
            <p class="name-id"> Email:amandhattarwal@gmail.com </p>
            <p class="name-id"> Followers count: 36,60,000 </p>
            <p class="name-id"> Gender: Male </p>
            <p class="name-id"> Platform of content creation: Youtube </p>
         </div>
        <div id="Content-about">
            <p>About:</p>
            <p>Aman Dhattarwal is an Indian YouTuber, Public Speaker, Influencer, career counselor, and educator.Aman is well known for his educational and motivational videos, which he uploads on his youtube channel. </p>
        </div>
    </div> -->


</body>

</html>