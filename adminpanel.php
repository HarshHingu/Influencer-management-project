<?php
session_start();
if(!isset($_SESSION['admin'] )){

header("location:adminlogin.php");
}
include("dbconnect.php");
?>
<!doctype html>
<html lang="en">

<head>
<link rel="icon" type="" href="influencer favicon.jfif">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <style>
    tr,
    th,
    #usermanageTable td {
      text-align: center;
      vertical-align: middle;
    }
    /* body,{
        background-color: #E1D9D1;
      }
      td{
        background-color: blueviolet;
      } */
  </style>
  <title>Admin Panel</title>
</head>

<body>

        <!-- <a class="btn btn-primary float-right" style="color:black; font-size: 20px;" href="register_as_influencer.php">Influencer Registration</a> -->
        <a href="logout.php" role="button" style="margin:10px;" class="btn btn-primary float-right">Log out</a>&nbsp;
        <a href="register_as_influencer.php" style="margin:10px;" role="button" class="btn btn-primary float-right">Influencer Registration</a>&nbsp;      
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
     <?php
     include 'dbconnect.php';
  //Update user
 
  //Delete user 
  $deleteduser = false;
  if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];
    
    $delsql = "DELETE FROM `dbinfluencertable` WHERE  `id` = '$deleteid'";
    $delresult = mysqli_query($conn, $delsql);
    if ($delresult) {
      $deleteduser = true;
    } else {
      echo "Fail to delete";
    }
  }
if(isset($updateduser)){

  if ($updateduser) {
    echo '<div class="alert alert-success alert-dismissible fade show mb-0 " role="alert">
    User profile has been updated.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  }

  if ($deleteduser) {
    echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                  User has been deleted.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
  }
  ?>
  <?php
  
  $sql = "SELECT * FROM `dbinfluencertable`";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  ?>
  <div class="table-responsive pt-3">
    <table class="table px-0" id="usermanageTable">
      <thead class="thead-light">
        <tr>
          <th scope="col">Sr no.</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Followers</th>
          <th scope="col">Action</th>       
        
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          echo "
        <tr id=\"" . $row['id'] . "\">
          <th scope='row'>" . $no . "</th>
          <td>" . $row['name'] . "</td>

          <td>" . $row['email'] . "</td>
          <td>" . $row['gender'] . "</td>
          <td>" . $row['followers'] . "</td>
          <td>
          <div class=\"container\">
          <a class=\"btn btn-warning edit text-dark font-weight-bold  m-2 py-2 edit role=\"button\" href=\"editdetail.php?id=".$row['id']."\" >Edit</a>
          <a class=\"btn btn-danger text-white font-weight-bold  m-2 py-2 delete\" role=\"button\" href=\"adminpanel.php?delete=".$row['id']."\">Delete</a>
          </div>
          </td>
        </tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>
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
  <!-- Data table links -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#usermanageTable').DataTable();
    });
  </script>
  <script>
   

    //Delete
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        //console.log("edit ",e.target.parentNode.parentNode.parentNode.children[3].innerHTML);
        console.log("delete ", e.target.parentNode.parentNode.parentNode.id);
        usermail = e.target.parentNode.parentNode.parentNode.id;
        if (confirm("Do you want to delete the user ?")) {
          //console.log("yes");
          window.location = `usersmanage.php?delete=${usermail}`;
        } else {
          console.log("no");
        }
      });
    });
  </script>

  <script src="adminscript.js"></script>
</body>

</html>