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
    $query = mysqli_query($db, "SELECT * FROM crime WHERE ID = '$id'");
    //$data = mysqli_fetch_array($query);
    if ($row = mysqli_fetch_assoc($query)) {
      $caseno   = $row['caseno'];
      $Punishment    = $row["punishment"];
      $Criminal = $row['criminal_ID'];
      $CrimeType = $row["crimeType"];
      $CrimeCategory = $row["crimeCategory"];
      $Prison = $row["prison"];
      $Court = $row["court"];
      $Date = $row["date"];
      $Place = $row["place"];
      $Description = $row["description"];
      $PoliceId = $row["police_Id"];
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
          <label>Case No</label>
          <p class="form-control-static"><?php echo $caseno ?></p>
        </div>
        <div class="form-group">
          <label>Criminal</label>
          <p class="form-control-static"><?php echo $Criminal ?></p>
        </div>
        <div class="form-group">
          <label>Crime Type</label>
          <p class="form-control-static"><?php echo $CrimeType ?></p>
        </div>
        <div class="form-group">
          <label>Prison</label>
          <p class="form-control-static"><?php echo $Prison ?></p>
        </div>
        <div class="form-group">
          <label>Crime Location</label>
          <p class="form-control-static"><?php echo $Place ?></p>
        </div>
        <div class="form-group">
          <label>Duty Police</label>
          <p class="form-control-static"><?php echo $PoliceId ?></p>
        </div>
        <div class="form-group">
          <label>Punishment</label>
          <p class="form-control-static"><?php echo $Punishment ?></p>
        </div>
        <div class="form-group">
          <label>Date</label>
          <p class="form-control-static"><?php echo $Date ?></p>
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