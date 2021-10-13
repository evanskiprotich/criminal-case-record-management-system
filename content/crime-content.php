<!-- Begin Page Content -->
<div class="container-fluid d-flex justify-content-between">
  <div class="body-area w-100 pr-5">
    <h1 class="text-center">Add Crime</h1>
    <hr>
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleFormControlInput2">Case No</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="caseNo">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select Duty Officer</label>
        <select class="form-control" id="exampleFormControlSelect1" name="police">
          <?php
          $sql = mysqli_query($db, "SELECT id,fName,lName From police");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)) {
            echo "<option value='" . $row['id'] . "'>" . $row['fName'] . " " . $row['lName'] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select Criminal </label>
        <select class="form-control" id="exampleFormControlSelect1" name="criminal">
          <?php
          $sql = mysqli_query($db, "SELECT id,fName,lName,phoneNumber From criminal");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)) {
            echo "<option value='" . $row['id'] . "'>" . $row['fName'] . " " . $row['lName'] . " " . $row['phoneNumber']
              . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select Crime Type</label>
        <select class="form-control" id="exampleFormControlSelect1" name="crimetype">
          <?php
          $sql = mysqli_query($db, "SELECT name From crimetype");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select Category</label>
        <select class="form-control" id="exampleFormControlSelect1" name="crimecat">
          <?php
          $sql = mysqli_query($db, "SELECT name From crimecategory");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select Prison</label>
        <select class="form-control" id="exampleFormControlSelect1" name="prison">
          <?php
          $sql = mysqli_query($db, "SELECT name From prison");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Select Court</label>
        <select class="form-control" id="exampleFormControlSelect1" name="court">
          <?php
          $sql = mysqli_query($db, "SELECT name From court");
          $row = mysqli_num_rows($sql);
          while ($row = mysqli_fetch_array($sql)) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Date</label>
        <input type="date" class="form-control" id="datepicker" placeholder="yyyy/mm/dd" name="date" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput2">Place</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="place">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput2">Image</label><br>
        <input type="file" name="image">
      </div>
      <button type="submit" class="btn btn-primary" name="addcrime">Submit</button>
    </form>
  </div>
  <div class="right-body">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark ">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-gavel"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Quick Link</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
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
if (!$db) {
  die('Could not connect: ' . mysqli_error());
}
if (isset($_POST['addcrime'])) {
  // File upload path
  $targetDir = "uploads/crime/";
  $fileName = basename($_FILES["image"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
  $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

  $police = mysqli_real_escape_string($db, $_POST['police']);
  $criminal = mysqli_real_escape_string($db, $_POST['criminal']);
  $crimetype = mysqli_real_escape_string($db, $_POST['crimetype']);
  $crimecat = mysqli_real_escape_string($db, $_POST['crimecat']);
  $prison = mysqli_real_escape_string($db, $_POST['prison']);
  $court = mysqli_real_escape_string($db, $_POST['court']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $place = mysqli_real_escape_string($db, $_POST['place']);
  $caseNo = mysqli_real_escape_string($db, $_POST['caseNo']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  // Allow certain file formats
  $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
  if (in_array($fileType, $allowTypes)) {
    // Upload file to server
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
      // Insert image file name into database
      $insert = $db->query("INSERT INTO 
crime(police_Id,criminal_ID,crimeType,crimeCategory,prison,court,date,place,image,description,uploads_on,caseno) 
 
VALUES('$police','$criminal','$crimetype','$crimecat','$prison','$court','$date','$place','$targetFilePath','$description',NOW(),'$caseNo')");

      if ($insert) {
        echo "<script> alert('Data stored successfully'); </script>";
      } else {
        $statusMsg = "File upload failed, please try again.";
      }
    } else {
      $statusMsg = "Sorry, there was an error uploading your file.";
    }
  } else {
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
  }
} else {
  $statusMsg = 'Please select a file to upload.';
}
// Display status message
// echo $statusMsg; 
?>