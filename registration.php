<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname', '$email','$password')";

    $result=mysqli_query($conn,$query);
    

if($result)
{
    header("location:login.php");

}
else{
    echo "Data not Inserted" .mysqli_connect_error();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: -webkit-linear-gradient(rgb(170,150,190),rgb(100,90,10));
    }
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container">
  <div class="form-container">
    <h2 class="mb-4 text-primary">Registration Form</h2>
    <form action="" method="post">
      <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="fname" required>
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lname" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <!-- <div class="mb-3">
        <label for="picture" class="form-label">Upload Picture</label>
        <input type="file" class="form-control" id="picture" name="img">
      </div> -->
      <button type="button" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Signup</button><br><br>
   </form>

    <div class="mt-3">
      <p>Already signed up? <a href="login.php">Login here</a></p>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
