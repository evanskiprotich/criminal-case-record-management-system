<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
include("header.php");
?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        if ($_SESSION['userRoll'] != "user") {
            include("sidenav.php");
        }
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include("topbar.php") ?>