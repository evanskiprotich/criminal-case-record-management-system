<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>View Record</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style type="text/css">
  .wrapper {
    width: 1200px;
    margin: 0 auto;
  }
  </style>
</head>

<body>
  <?php
  if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    require_once "server.php";

    $id = trim($_GET["id"]);
    $query = mysqli_query($db, "SELECT * FROM criminal WHERE ID = '$id'");
    //$data = mysqli_fetch_array($query);
    if ($row = mysqli_fetch_assoc($query)) {
      $FirstName   = $row['fName'];
      $LastName    = $row["lName"];
      $FathersName = $row["fathersName"];
      $MothersName = $row["mothersName"];
      $contactno = $row["contactno"];
      $Height = $row["height"];
      $Weight = $row["weight"];
      $EyeColor = $row["eyeColor"];
      $Address = $row["address"];
      $town = $row["town"];
      $county = $row["county"];
      $NID = $row["phoneNumber"];
      $Date = $row["dateOFbirth"];
      $EmailAddress = $row["email"];
      $Image = $row["image"];
    } else {
      // header("location: read.php");
      exit();
    }

    mysqli_close($db);
  } else {
    header("location: home.php");
    exit();
  }
  ?>
  <div class="wrapper">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="page-header">
          <h1>View Record</h1>
        </div>
        <div class="form-group">
          <label>First Name</label>
          <p class="form-control-static"><?php echo $FirstName ?></p>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <p class="form-control-static"><?php echo $LastName ?></p>
        </div>
        <div class="form-group">
          <label>Father's Name</label>
          <p class="form-control-static"><?php echo $FathersName ?></p>
        </div>
        <div class="form-group">
          <label>Mother's Name</label>
          <p class="form-control-static"><?php echo $MothersName ?></p>
        </div>
        <div class="form-group">
          <label>Contact No</label>
          <p class="form-control-static"><?php echo $contactno ?></p>
        </div>
        <div class="form-group">
          <label>Height</label>
          <p class="form-control-static"><?php echo $Height ?></p>
        </div>
        <div class="form-group">
          <label>Weight</label>
          <p class="form-control-static"><?php echo $Weight ?></p>
        </div>
        <div class="form-group">
          <label>Eye Color</label>
          <p class="form-control-static"><?php echo $EyeColor ?></p>
        </div>
        <div class="form-group">
          <label>Address</label>
          <p class="form-control-static"><?php echo $Address ?></p>
        </div>
        <div class="form-group">
          <label>town</label>
          <p class="form-control-static"><?php echo $town ?></p>
        </div>
        <div class="form-group">
          <label>county</label>
          <p class="form-control-static"><?php echo $county ?></p>
        </div>
        <div class="form-group">
          <label>NID</label>
          <p class="form-control-static"><?php echo $NID ?></p>
        </div>
        <div class="form-group">
          <label>Date</label>
          <p class="form-control-static"><?php echo $Date ?></p>
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <p class="form-control-static"><?php echo $EmailAddress ?></p>
        </div>
        <div class="form-group">
          <label>Image</label>
          <p class="form-control-static"><?php echo $Image ?></p>
        </div>
        <p><a href="home.php" class="btn btn-primary">Back</a></p>
      </div>
    </div>
  </div>
  </div>
</body>

</html>