<!-- Begin Page Content -->
<div class="container-fluid d-flex justify-content-between">
    <div class="body-area w-100 pr-5">
        <h1 class="text-center">Add Crime Punishment</h1>
        <hr>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Case No</label>
                <select class="form-control" id="exampleFormControlSelect1" name="ids">
                    <?php
                    $sql = mysqli_query($db, "SELECT id,caseno From crime");
                    $row = mysqli_num_rows($sql);
                    if ($row > 0) {
                        while ($row = mysqli_fetch_array($sql)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['caseno'] . "</option>";
                        }
                    } else echo "<option value=''> No Data found</option>";
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Punishment</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" name="punishment">
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
                <a class="nav-link" href="home.php">
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
    $id = mysqli_real_escape_string($db, $_POST['ids']);
    $punish = mysqli_real_escape_string($db, $_POST['punishment']);
    $insert = $db->query("UPDATE crime SET punishment = '$punish' WHERE id = $id");

    echo "<script> alert('Data stored successfully'); </script>";
} else {
    $statusMsg = 'Please select ';
}

// Display status message
// echo $statusMsg; 
?>