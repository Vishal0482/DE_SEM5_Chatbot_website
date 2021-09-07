<?php

require_once("config.php");

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {


  //check if username is empty

  if (empty(trim($_POST["username"]))) {
    $username_err = "username cannot be blank";
  } 
  else {
    $sql = "SELECT id from users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      //set the value to the param username
      $param_username = trim($_POST['username']);

      //try to execite this statement
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken";
        } 
        else {
          $username = trim($_POST['username']);
        }
      } 
      else {
        echo "Something went wrong";
      }
    }
  }

  mysqli_stmt_close($stmt);

  //check for password

  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
  } elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = 'password cannot be less than 5 characters';
  } else {
    $password = trim($_POST['password']);
  }

  //check for confim password field
  if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
    $password_err = "Password should match";
  }

  //If there were no errors, go ahead and insert into the database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
    $sql = "INSERT INTO users (username, password) VALUES(?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      //set these pararmeters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      //Try to execute the query
      if (mysqli_stmt_execute($stmt)) {
        header("location: login.php");
      } else {
        echo "Something went wrong .. connet redirect!";
      }
    }

    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.css">

  <!-- Custom styles for this template -->
  <link href="css/login.css" rel="stylesheet">


  <title>NBoT</title>
</head>

<body class="text-center pt-5">

    <main class="form-signin border shadow ">
      <form action="" method="POST">
        <img class="mb-4" src="img/logo.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Register</h1>
  
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name">
            <label for="floatingInput">Company name</label>
          </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
            <label for="floatingPassword">Confirm Password</label>
        </div>
  
        <div class="checkbox my-3">
          <label>
            <input type="checkbox" value="remember-me"> Accept terms & conditions
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <p class="mt-3 mb-md-0 color-2 text-center text-md-left">Copyright ©
          <script language="JavaScript" type="text/javascript">
          document.write((new Date()).getFullYear())
          </script>, Chatbot
      </p>
      </form>
    </main>






  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

  <script src="/bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
-->

</body>

</html>