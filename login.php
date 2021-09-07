<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'include/header.php'?>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<!-- login dialoge box start -->
    <div class="body text-center">
    <main class="form-signin border shadow">
      <form>
        <img class="mb-4" src="./img/logo.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
  
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox my-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        <!-- copyright section -->
        <p class="mt-3 mb-md-0 color-2 text-center text-md-left">Copyright ©
          <script language="JavaScript" type="text/javascript">
          document.write((new Date()).getFullYear())
          </script>, Chatbot
      </p>
      </form>
    </main>
  </div>
<!-- login dialoge box end -->


    <?php include 'include/script.php';?>
</body>
</html>