<?php
include_once("header.php");
?>

<?php
    if ($_SESSION['userRoll']=="admin") {
        ?>

<body style="background-image: url('img/image2.jpg');">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!--Nested Row within card body-->
        <div class="row d-flex justify-content-center">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4-text-gray-900 mb-4">Create an Account</h1>
              </div>
              <form action="register.php" class="user" method="post">
                <?php
                                    include('errors.php');
                                ?>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" placeholder="First Name" class="form-control form-control-user" name="fName"
                      id="exampleFirstName" value="">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Last Name" class="form-control form-control-user" name="lName"
                      id="exampleLastName" value="">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" placeholder="User Name" class="form-control form-control-user" name="username"
                    id="username" value="">
                  <span id="availability"></span>
                </div>
                <div class="form-group">
                  <input type="email" placeholder="Email Address" class="form-control form-control-user" name="email"
                    id="exampleInputEmail" value="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Role Type</label>
                  <select class="form-control" name="role" id="exampleFormControlSelect1" required>
                    <option value="subuser">Sub Admin</option>
                    <option value="user">Normal User</option>
                    <option value="police">police User</option>
                    <option value="court">Court User</option>
                  </select>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password_1"
                      id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password_2"
                      id="exampleRepeatPassword" placeholder=" Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-danger btn-user btn-block" name="reg_user">Register
                  Account</button>
              </form>
              <hr>
              <div class="text-center">
                <a href="forgot-password.php" class="small">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a href="login.php" class="small">Already have an account?Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
        }else{
            header('location:home.php');
        }
        ?>

  <?php
        include("footer.php");
        ?>

  <script>
  $(document).ready(function() {
    $('#username').blur(function() {
      var username = $(this).val();
      $.ajax({
        url: 'check/user-check.php',
        method: "POST",
        data: {
          user_name: username
        },
        dataType: "text",
        success: function(html) {
          $('#availability').html(html);
        }
      })
    });
  });
  </script>
  <?php include("footer.php"); ?>