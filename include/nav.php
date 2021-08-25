  <!-- Navigation bar start -->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark text-center">
    <div class="container-fluid">
      <img src="./img/logo.jpg" alt="logo" class="navbar-logo mx-3">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <!-- nav-pills -->

        <!-- navbar links -->
        <ul class="navbar-nav me-auto mb-2 mb-md-0 nav-masthead">
          <li class="nav-item">
            <a class="nav-link <?php echo(basename($_SERVER['PHP_SELF']) == "index.php")?"active":"" ?>" id="home" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo(basename($_SERVER['PHP_SELF']) == "service.php")?"active":"" ?>" id="service" 
            href="./service.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo(basename($_SERVER['PHP_SELF']) == "pricing.php")?"active":"" ?>" id="pricing" 
            href="./pricing.php">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo(basename($_SERVER['PHP_SELF']) == "about.php")?"active":"" ?>" id="about" href="./about.php">About</a>
          </li>
        </ul>

        <!-- login buttons -->
        <form class="d-flex justify-content-center">
          <button type="button" class="btn btn-outline-light me-2" id="login">Login</button>
          <button type="button" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navigation bar ends -->