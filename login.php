<?php
session_start();

if(isset($_SESSION['username']))
{
    header("location:home.php");
    exit();
}

include('connection.php');

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result=mysqli_query($conn,$query);

    if($result)
    {
        $_SESSION['email']=$email;
        header("location:home.php");
        exit();
    }
    else{
        $error="Invalid email or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: -webkit-linear-gradient(rgb(100,200,150),rgb(120,100,150));
    }
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container">
  <div class="login-container">
    <h2 class="mb-4 text-primary">Login</h2>
    <form action="#" method="post">
      <div class="mb-3">
        <label for="loginEmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
      </div>
      <div class="mb-3">
        <label for="loginPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
      </div>
      <button type="button" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Login</button><br><br>
    </form>

    <div class="mt-3">
      <p>New user? <a href="registration.php">Register</a></p>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
