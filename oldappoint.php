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
    <form class="form-inline my-2 my-lg-0" action="http://localhost/login/medhist.php">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">My Medical History</button>
    </form> 
  </div>
</nav>
<?php



require_once "config.php";



$user = $_SESSION['username'];
$quer = "SELECT * FROM users WHERE username='$user'";
$rs = mysqli_query($conn,$quer);


// if (!$rs)
// {
// echo("Error description: " . mysqli_error($conn));
// }
$getRow = mysqli_fetch_array($rs);
$id = $getRow["id"];


    

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $number = $_POST['number'];
        $descr = $_POST['descr'];

        $query = "SELECT * FROM hospitalq WHERE sno='$number'";
        $rs = mysqli_query($conn,$query);
        $getRowc = mysqli_num_rows($rs);

        $row = mysqli_fetch_array($rs);

        $name = $row['name'];
        $email = $row['email'];
        $gender = $row['gender'];
        $dept = $row['department'];
        $age = $row['age'];
        
        $input_date=$row['appointment'];
        
        // echo $input_date;
        // $date=date("Y-m-d",strtotime($input_date));

        // echo $date;
        
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "login";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `hospitalq` (`name`, `email`, `gender`, `department`, `age`, `date`, `descr`, `user_id`, `appointment`,`uniqueid`) VALUES ('$name', '$email','$gender', '$dept', '$age', current_timestamp(),  '$descr', '$id', '$input_date','$id')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          // echo $apu;
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }
    }



?>

<div class="container mt-3">
<h1>Enter your previous appointment number</h1>
    <form action="#" method="post">
    <div class="form-group">
        <label for="name"></label>
        <input type="number" name="number" class="form-control" id="name" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="descr">Description</label>
        <textarea class="form-control" name="descr" id="descr" cols="30" rows="10"></textarea> 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>