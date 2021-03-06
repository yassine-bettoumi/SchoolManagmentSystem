<?php require APPROOT . '/views/inc/header.php' ?>
<?php
  if(!isLoggedIn()){
    redirect('users/login');
  }
  if(isSessionAdmin() != "yes"){
    redirect('users/login');
  }
?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/css/adminDashboard.css">

</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark sticky-top">
    <a class="navbar-brand py-0" href="#">My School</a>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle py-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo getUsername(); ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/admins/editprofile">Edit Profile</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/admins/changepassword">Change Password</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout">Log out</a>
        </div>
      </li>
    </ul>
  </nav>

  <div class="row m-0">
    <div class="col-2"></div>
    <!--Left Section-->
    <div class="col-2 h-100 px-0 bg-dark left_section">

      <!--User info-->
      <div class="row align-items-center profile_details text-white mt-2">
        <div class="col-3">
          <img src="<?php echo URLROOT; ?>/img/admin.png" class="profile_image rounded-circle pl-1" alt="">
        </div>
        <div class="col-9">
          <p class="m-0"><i>Admin</i></p>
        </div>
      </div>

      <ul class="nav mt-2 sidebar flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo URLROOT; ?>/admins/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/addstudent"><i class="fas fa-user-plus"></i> Add Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/viewstudentprofile"><i class="fas fa-user-graduate"></i> View Student Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/editstudentprofile"><i class="fas fa-user-edit"></i> Edit Student Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/viewprofile"><i class="fas fa-user-tie"></i> View your Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/editprofile"><i class="fas fa-user-edit"></i> Edit your Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/changepassword"><i class="fas fa-key"></i> Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/maintainattendance"><i class="far fa-calendar-alt"></i> Maintain Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/admins/maintainfee"> <i class="fas fa-dollar-sign"></i> &nbsp;Maintain Fee</a>
        </li>
      </ul>

    </div>


    <!--Right section-->
    <div class="col px-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2 mx-3 mt-2 bg-light">
          <li class="active" aria-current="page"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
          <li class="breadcrumb-item ml-auto"><a href="<?php echo URLROOT; ?>/admins/dashboard"><i class="fas fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
        </ol>
      </nav>

      <div class="row m-0">
        <div class="col-3">
          <div class="card text-white bg-primary">
            <div class="card-body rounded-top pt-3 pb-2">
              <div class="row">
                <div class="col-7">
                  <h3 class="card-title my-0">Maintain</h3>
                  <p class="card-text">Attendance</p>
                </div>
                <div class="col-4 rounded-bottom">
                  <div class="display-4 py-0 my-0"><i class="far fa-calendar-alt"></i></div>
                </div>
              </div>
            </div>
            <div class="card-footer py-1 text-center">
              <small class="text-muted"><a href="<?= URLROOT; ?>/admins/maintainattendance" class="text-white">More info <i class="fas fa-arrow-circle-up"></i></a></small>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card text-white bg-success">
            <div class="card-body rounded-top pt-3 pb-2">
              <div class="row">
                <div class="col-7">
                  <h3 class="card-title my-0">Add</h3>
                  <p class="card-text">Students</p>
                </div>
                <div class="col-4 rounded-bottom">
                  <div class="display-4 py-0 my-0"><i class="fas fa-user-plus"></i></div>
                </div>
              </div>
            </div>
            <div class="card-footer py-1 text-center">
              <small class="text-muted"><a href="<?= URLROOT; ?>/admins/addstudent" class="text-white">More info <i class="fas fa-arrow-circle-up"></i></a></small>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card text-white bg-info">
            <div class="card-body rounded-top pt-3 pb-2">
              <div class="row">
                <div class="col-7">
                  <h3 class="card-title my-0">Edit</h3>
                  <p class="card-text">Student Profile</p>
                </div>
                <div class="col-4 rounded-bottom">
                  <div class="display-4 py-0 my-0"><i class="fas fa-user-edit"></i></div>
                </div>
              </div>
            </div>
            <div class="card-footer py-1 text-center">
              <small class="text-muted"><a href="<?= URLROOT; ?>/admins/editstudentprofile" class="text-white">More info <i class="fas fa-arrow-circle-up"></i></a></small>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="card text-white bg-warning">
            <div class="card-body rounded-top pt-3 pb-2">
              <div class="row">
                <div class="col-7">
                  <h3 class="card-title my-0">Maintain</h3>
                  <p class="card-text">Fee</p>
                </div>
                <div class="col-4 rounded-bottom">
                  <div class="display-4 py-0 my-0"><i class="fas fa-dollar-sign"></i></div>
                </div>
              </div>
            </div>
            <div class="card-footer py-1 text-center">
              <small class="text-muted"><a href="<?= URLROOT; ?>/admins/maintainfee" class="text-white">More info <i class="fas fa-arrow-circle-up"></i></a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="<?php echo URLROOT; ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>
</html>
