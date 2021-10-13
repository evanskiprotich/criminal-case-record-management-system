<!-- Begin Page Content -->
<div class="container-fluid d-flex justify-content-between">
  <div class="body-area w-100 pr-5">
    <h1 class="text-center">Add Court</h1>
    <hr>
    <form method="post">
      <div class="form-group">
        <label for="exampleFormControlInput2"> Court Name</label>
        <input name="Name" type="text" class="form-control" id="exampleFormControlInput2" required>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea name="desription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" name="add_court" class="btn btn-primary">Submit</button>
    </form>

  </div>
  <div class="right-body">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark ">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-gavel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Quick Link</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Link</span></a>
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Link</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->
  </div>
</div>
<!-- /.container-fluid -->
<?php
include("header.php");
if(! $db ) {
die('Could not connect: ' . mysqli_error());
}
if (isset($_POST['add_court'])) {
$name = ucfirst(mysqli_real_escape_string($db, $_POST['Name']));
$des = ucfirst(mysqli_real_escape_string($db, $_POST['desription']));
$query = "INSERT INTO court(Name,description) VALUES('$name','$des')";
mysqli_query($db, $query);
echo "<script> alert('Data stored successfully'); </script>";
}
?>