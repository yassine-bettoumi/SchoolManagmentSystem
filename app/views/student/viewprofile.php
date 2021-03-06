<?php require APPROOT . '/views/inc/header.php'; ?>
<?php
  if(!isLoggedIn()){
    redirect('users/login');
  }
  if(isSessionAdmin() != "no"){
    redirect('users/login');
  }
?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/studentViewProfile.css">

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
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/students/editprofile">Edit Profile</a>
          <a class="dropdown-item" href="<?php echo URLROOT; ?>/students/changepassword">Change Password</a>
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
          <img src="<?php echo URLROOT; ?>/img/student.png" class="profile_image rounded-circle pl-1" alt="">
        </div>
        <div class="col-9">
          <p class="m-0"><i>Student</i></p>
        </div>
      </div>

      <ul class="nav mt-2 sidebar flex-column">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/students/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/students/attendance"><i class="far fa-calendar-alt"></i> Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/students/feedetails"><i class="fas fa-dollar-sign"></i> Fee Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo URLROOT; ?>/students/viewprofile"><i class="fas fa-user"></i> View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/students/editprofile"><i class="fas fa-user-edit"></i> Edit Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/students/changepassword"><i class="fas fa-key"></i> Change Password</a>
        </li>
      </ul>

    </div>


    <!--Right section-->
    <div class="col px-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2 mx-3 mt-2 bg-light">
          <li class="active" aria-current="page"><i class="fas fa-user"></i> Profile</li>
          <li class="breadcrumb-item ml-auto"><a href="<?php echo URLROOT; ?>/students/dashboard"><i class="fas fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user"></i> Profile</li>
        </ol>
      </nav>

      <div class="row m-3">
        <div class="col py-2 bg-light border border-info rounded">
          <form class="" action="<?php echo URLROOT; ?>/students/viewprofile" method="post">
            <div class="row">
              <div class="col">

                <!-- Student detail -->
                <div class="card mb-3 border border-info rounded">
                  <div class="card-head bg-info">
                    <p class="m-2 ml-3 text-white"><i class="fa fa-info-circle"></i> Student Details</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col form-group">
                        <input type="text" name="first_name" class="form-control" value="<?= $data['first_name']; ?>" placeholder="First Name" disabled required>
                      </div>
                      <div class="col form-group">
                        <input type="text" name="last_name" class="form-control" value="<?= $data['last_name']; ?>" placeholder="Last Name" disabled required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col form-group">
                        <input type="date" name="date_of_birth" class="form-control" value="<?= $data['date_of_birth']; ?>" disabled required>
                      </div>
                      <div class="col form-group">
                        <select class="form-control" name="gender" disabled required>
                          <option value="" disabled <?php if($data['gender'] == ""){ echo 'selected'; } ?>>Gender</option>
                          <option value="male" <?php if($data['gender'] == "male"){ echo 'selected'; } ?>>Male</option>
                          <option value="female" <?php if($data['gender'] == "female"){ echo 'selected'; } ?>>Female</option>
                          <option value="others" <?php if($data['gender'] == "others"){ echo 'selected'; } ?>>Others</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Current Address -->
                <div class="card mb-3 border border-info rounded">
                  <div class="card-head bg-info">
                    <p class="m-2 ml-3 text-white"><i class="fa fa-info-circle"></i> Current Address</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col form-group">
                        <input type="text" name="current_address" class="form-control" value="<?= $data['current_address']; ?>" placeholder="Address" disabled required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col form-group mb-0">
                        <input type="text" name="current_city" class="form-control" value="<?= $data['current_city']; ?>" placeholder="City" disabled required>
                      </div>
                      <div class="col form-group mb-0">
                        <select class="form-control" name="current_country" disabled>
                          <option value="india">India</option>
                        </select>
                      </div>
                      <div class="col form-group mb-0">
                        <input type="text" name="current_pincode" class="form-control" value="<?= $data['current_pincode']; ?>" placeholder="Pincode" disabled required>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Permanent Address -->
                <div class="card mb-3 border border-info rounded">
                  <div class="card-head bg-info">
                    <p class="m-2 ml-3 text-white"><i class="fa fa-info-circle"></i> Permanent Address</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col form-group">
                        <input type="text" name="permanent_address" class="form-control" value="<?= $data['permanent_address']; ?>" placeholder="Address" disabled required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col form-group mb-0">
                        <input type="text" name="permanent_city" class="form-control" value="<?= $data['permanent_city']; ?>" placeholder="City" disabled required>
                      </div>
                      <div class="col form-group mb-0">
                        <select class="form-control" name="permanent_country" disabled>
                          <option value="india">India</option>
                        </select>
                      </div>
                      <div class="col form-group mb-0">
                        <input type="text" name="permanent_pincode" class="form-control" value="<?= $data['permanent_pincode']; ?>" placeholder="Pincode" disabled required>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col">
                <div class="row mb-3">
                  <div class="col">

                    <!-- Class Details -->
                    <div class="card border border-info rounded">
                      <div class="card-head bg-info">
                        <p class="m-2 ml-3 text-white">Class Details </p>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col form-group mb-0">
                            <select class="form-control" name="class" disabled required>
                              <option value="" disabled <?php if($data['class'] == ""){ echo 'selected'; } ?>>Class</option>
                              <option value="5" <?php if($data['class'] == "5"){ echo 'selected'; } ?>>5th</option>
                              <option value="6" <?php if($data['class'] == "6"){ echo 'selected'; } ?>>6th</option>
                              <option value="7" <?php if($data['class'] == "7"){ echo 'selected'; } ?>>7th</option>
                              <option value="8" <?php if($data['class'] == "8"){ echo 'selected'; } ?>>8th</option>
                              <option value="9" <?php if($data['class'] == "9"){ echo 'selected'; } ?>>9th</option>
                              <option value="10" <?php if($data['class'] == "10"){ echo 'selected'; } ?>>10th</option>
                              <option value="11" <?php if($data['class'] == "11"){ echo 'selected'; } ?>>11th</option>
                              <option value="12" <?php if($data['class'] == "12"){ echo 'selected'; } ?>>12th</option>
                            </select>
                          </div>
                          <div class="col form-group mb-0">
                            <select class="form-control" name="section" disabled required>
                              <option value="" disabled <?php if($data['section'] == ""){ echo 'selected'; } ?>>Section</option>
                              <option value="a" <?php if($data['section'] == "a"){ echo 'selected'; } ?>>Section A</option>
                              <option value="b" <?php if($data['section'] == "b"){ echo 'selected'; } ?>>Section B</option>
                              <option value="c" <?php if($data['section'] == "c"){ echo 'selected'; } ?>>Section C</option>
                            </select>
                          </div>
                          <div class="col form-group mb-0">
                            <input type="number" name="rollnumber" class="form-control" value="<?= $data['rollnumber']; ?>" placeholder="Roll Number" disabled required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <div class="card border border-info rounded">
                      <div class="card-head bg-info">
                        <p class="m-2 ml-3 text-white">Parent Details </p>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-secondary text-white" id="fathers_name_addon">Father's Name</span>
                            </div>
                            <input type="text" name="fathers_name" class="form-control" value="<?= $data['fathers_name']; ?>" placeholder="Father's name" disabled required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-secondary text-white" id="mothers_name_addon">Mother's Name</span>
                            </div>
                            <input type="text" name="mothers_name" class="form-control" value="<?= $data['mothers_name']; ?>" placeholder="Mother's name" disabled required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-secondary text-white" id="fathers_occupation_addon">Father's Occupation</span>
                            </div>
                            <input type="text" name="fathers_occupation" class="form-control" value="<?= $data['fathers_occupation']; ?>" placeholder="Father's occupation" disabled required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-secondary text-white" id="mothers_occupation_addon">Mother's Occupation</span>
                            </div>
                            <input type="text" name="mothers_occupation" class="form-control" value="<?= $data['mothers_occupation']; ?>" placeholder="Mothers's occupation" disabled required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-secondary text-white" id="annual_income">Annual Family Income</span>
                            </div>
                            <input type="text" name="annual_income" class="form-control" value="<?= $data['annual_income']; ?>" placeholder="Annual income of family" disabled required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col form-group input-group mb-0">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-secondary text-white" id="fathers_number_addon">Father's Mobile Number</span>
                            </div>
                            <input type="text" name="fathers_mobile_number" class="form-control" value="<?= $data['fathers_mobile_number']; ?>" placeholder="Fathers Contact Number" disabled required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6 form-group">
                    <a href="<?= URLROOT; ?>/students/editprofile" class="btn btn-primary btn-block">Edit</a>
                  </div>
                </div>

              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript" src="<?php echo URLROOT; ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo URLROOT; ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>
</html>
