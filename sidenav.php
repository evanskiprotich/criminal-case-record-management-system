<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-gavel"></i>
    </div>
    <div class="sidebar-brand-text mx-3">CRIME</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="home.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    Crime Information
  </div>
  <?php
    if ($_SESSION['userRoll'] != "court") {
    ?>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Criminal</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="report-criminal.php">Criminal List</a>
        <a class="collapse-item" href="page-criminal.php">Add Criminal</a>
      </div>
    </div>
  </li>
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
      aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-cog"></i>
      <span>Crime</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="page-crime.php">Add Crime</a>
      </div>
    </div>
  </li>
  <?php
    };
    ?>

  <?php
    if ($_SESSION['userRoll'] == "court") {
    ?>
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
      aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-cog"></i>
      <span>Crime</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="page-court.php">Add Punishment</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <?php
    };
    ?>

  <!-- Heading -->
  <div class="sidebar-heading">
    Addons
  </div>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
      aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Report</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="report-crime.php">Crime Report</a>
        <a class="collapse-item" href="report-criminal.php">Criminal Report</a>
        <?php
                if ($_SESSION['userRoll'] == "admin") {
                ?>
        <a class="collapse-item" href="report-police.php">Police List</a>
        <?php
                } else {
                }
                ?>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider">
  <?php
    if ($_SESSION['userRoll'] == "admin") {
    ?>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseadminPages" aria-expanded="true"
      aria-controls="collapseadminPages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Admin section</span>
    </a>
    <div id="collapseadminPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="admin-addpolice.php">Add Police</a>
        <a class="collapse-item" href="admin-crimetype.php">Add Crime Type</a>
        <a class="collapse-item" href="admin-crimecategory.php">Criminal Category</a>
        <a class="collapse-item" href="admin-addprison.php">Add Prison</a>
        <a class="collapse-item" href="admin-addcourt.php">Add Court</a>
        <a class="collapse-item" href="admin-addcourttype.php">Add Court Type</a>
        <a class="collapse-item" href="register.php">Create an Account</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <?php
    }
    ?>
  <?php
    if ($_SESSION['userRoll'] == "subuser") {
    ?>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseadminPages" aria-expanded="true"
      aria-controls="collapseadminPages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Admin section</span>
    </a>
    <div id="collapseadminPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="register.php">Create an Account</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <?php
    }
    ?>
  <?php
    if ($_SESSION['userRoll'] == "police") {
    ?>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">

    <div id="collapseadminPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <?php
    }
    ?>
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->