<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'include/header.php'; ?>
</head>

<body>
  <header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow" id="navbar">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company Name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <img src="./img/profile.png" alt="logo" class="navbar-logo mx-3 my-2 border border-primary">
      </div>
    </div>
  </header>
  <div class="container-fluid my-3">
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <h3>Home</h3>
            <hr>
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <h3>Profile</h3>
            <hr>
            <ul class="list-group list-group-flush rounded" id="details">
              <li class="list-group-item" id="dark1">Company Name: <span id="displayName"></span></li>
              <li class="list-group-item" id="dark2">Email: <span id="displayEmail"></span></li>
              <li class="list-group-item" id="dark3">A third item</li>
              <li class="list-group-item" id="dark4">A fourth item</li>
              <div id="changeDetail">
                
                <button type="button" class="btn btn-primary my-4" onclick="changeDetail()">Change Detail</button>
              </div>
            </ul>

            <div id="form">
              <div class="mb-3">
                <label for="companyName" class="form-label">Comapny Name</label>
                <input type="text" class="form-control" id="companyName" placeholder="Enter company name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <button type="button" class="btn btn-primary" onclick="saveChanges()">Save Change</button>
              <button type="button" class="btn btn-primary mx-3" onclick="cancle()">cancle</button>
            </div>

          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <h3>Messages</h3>
            <hr>
            <div class="container boarder rounded">
                Renew your plan to continue our services.
            </div>
            <div class="container boarder rounded">
                Your current Plan expire next week.
            </div>
          </div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <h3>Settings</h3>
            <hr>
            <h4>Appearance</h4>
            <h5>Themes</h5>

            <div class="form-check">
              <input type="radio" name="radios" onclick="check()" class="form-check-input" id="radioLight">
              <label class="form-check-label" for="exampleRadio1">Light</label>
            </div>

            <div class="mb-3 form-check">
              <input type="radio" name="radios" onclick="check()" class="form-check-input" id="radioDark">
              <label class="form-check-label" for="exampleRadio2">Dark</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include 'include/script.php'; ?>
  <script src="./script/dashboard.js"></script>
</body>

</html>