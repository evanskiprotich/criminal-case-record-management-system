<?php
include("header.php");
?>
<div class="container-fluid d-flex justify-content-between">
    <div class="body-area w-100 pr-5">
        <h1 class="text-center">Add Crime Type</h1>
        <hr>
        <form method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput2">Crime Type</label>
                <input name="Name" type="text" class="form-control" id="exampleFormControlInput2" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="description" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <button type="submit" name="add_prison" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="right-body">
       <!--SideBar--> 
       <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark">
            
            <!--SIDEBAR BRAND--> 
            <a href="home.php" class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-gavel"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Quick Links</div>
            </a>
            <!--DIVIDER-->
            <hr class="sidebar-divider my-0">
    
            <!--NAV ITEM DASHBOARD--> 
            <li class="nav-item">
                <a href="" class="nav-link">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Link</span>
            <a href="" class="nav-link">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Link</span>
            </a>
        </li>
        </ul>
        <!--END OF SIDEBAR--> 
    </div>
</div>

<?php
    if (!$db) {
        die('Could not connect:' .mysqli_error());
    }

    if(isset($_POST['add_crime_type'])){
        $name=ucfirst(mysqli_real_escape_string($db,$_POST['Name']));
        $des= ucfirst(mysqli_real_escape_string($db,$_POST['description']));
        $query="INSERT INTO crimetype(Name,description) VALUES('$name','$des')";
        mysqli_query($db,$query);
        echo"<script>alert('Data stored successfully')</script>";
    }

?>