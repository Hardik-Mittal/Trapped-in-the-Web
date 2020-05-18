<?php

require_once "config.php";

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Get Appointment</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Get Appointment</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/login/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/login/logout.php">Logout</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">My Medical History</button>
    </form> --> 
  </div>
</nav>

<?php

require_once "config.php";

$user = $_SESSION['username'];
$quer = "SELECT * FROM users WHERE username='$user'";
$ros = mysqli_query($conn,$quer);

$getRow = mysqli_fetch_array($ros);
$id = $getRow["id"];




$query = "SELECT * FROM hospitalq WHERE user_id='$id'";
$rs = mysqli_query($conn,$query);
$getRowc = mysqli_num_rows($rs);
?>
<table border= "1">
    <tr>
        <td>Sno</td>
        <td>Name</td>
        <td>Email</td>
        <td>gender</td>
        <td>Department</td>
        <td>Age</td>
        <td>Date</td>
        <td>Description</td>
        <td>Appointment Date</td>
        <td>Unique Id</td>
        <td>Appointment Status</td>
        <td>Time Slot</td>
    </tr>


<?php
$i =1;
for ($i = 1; $i <= $getRowc; $i++){
   
    $row = mysqli_fetch_array($rs);
    
?>
    <tr>
    <th><?php echo $row['sno'] ?></th>
    <th><?php echo $row['name'] ?></th>
    <th><?php echo $row["email"] ?></th>
    <th><?php echo $row["gender"] ?></th>
    <th><?php echo $row["department"] ?></th>
    <th><?php echo $row["age"] ?></th>
    <th><?php echo $row["date"] ?></th>
    <th><?php echo $row["descr"] ?></th>
    <th><?php echo $row["appointment"] ?></th>
    <th><?php echo $row["uniqueid"] ?></th>
    <th><?php echo $row["statusapp"] ?></th>
    <th><?php echo $row["time_slot"] ?></th>
</tr>



<?php
}


?>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>



