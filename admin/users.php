<?php

require_once('conn.php');


// Start the session
session_start();

// Check if the user is logged in
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page or display an error message
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- index.php  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>ADARSH BEROJGAR SEVA</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
         
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"><?= isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?></div>
              <!-- <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">  <span
                class="logo-name" style="font-size: 17px;">ADARSH BEROJGAR</span>
            </a>
          </div>
          <ul class="sidebar-menu">

            <li class="dropdown active">
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Scrapable</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="widget-chart.html"></a></li>
                <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
              </ul>
            </li>
          
  
         
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
         

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>All Appointment</h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <?php
                    $sql = "SELECT * FROM users";
                    $result = $conn->query($sql);
                    ?>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        
                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                       
                          
                                                        <th>Status</th>
                                                        <th>Created At</th>
                                                        <!-- <th>Action</th> -->
                      </tr>
                    
                     
                     
                      <?php
                                                    while($row = $result->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $row['name'];?></td>
                                                        <td><?= $row['email'];?></td>
                                                        <td><?= $row['contact'];?></td>
                                                        <td><?= $row['status'];?></td>
                                                        <td><?= $row['created_at'];?></td>
                                                        <!-- <td>
                                   
                                    <a href="edit.php?id=<?= $row['id']; ?>"><i class="fa fa-edit"></i></a>
                                    <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fas fa-cross"></i></a>
                                </td> -->
                                                    </tr>                                                     
                                                    <?php
                                                    }
                                                    ?>
                    
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="https://adarshberojgar.com/">ADARSH BEROJGAR SEVA</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>

  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.php  21 Nov 2019 03:47:04 GMT -->
</html>