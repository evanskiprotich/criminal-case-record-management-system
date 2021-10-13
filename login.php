<?php
include_once("header.php");
?>
<a class="nav-link js-scroll-trigger" href="index.php">
  <h6><strong>BACK TO HOME</h6></strong>
</a>
</li>

<body style="background-image: url('img/image.jpg');">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h9 text-gray-900 mb-4">Welcome!</h1>
                  </div>
                  <form class="user" method="post" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" placeholder="User Name" name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                        placeholder="Password" name="password">

                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-user btn-block" name="login_user">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include("layout-footer.php");
  ?>