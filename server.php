<?php
if (!isset($_SESSION)) {
    session_start();
}
// variable declaration
$username = "";
$email = "";
$userroll = "";
$errors = array();
$_SESSION['success'] = "";
// connect to database
$db = mysqli_connect('sql300.epizy.com', 'epiz_29849785','jjP9Vxae3seuH', 'epiz_29849785_criminalsystem');
// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $fName = mysqli_real_escape_string($db, $_POST['fName']);
    $lName = mysqli_real_escape_string($db, $_POST['lName']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $user_roll = mysqli_real_escape_string($db, $_POST['role']);
    // form validation: ensure that the form is correctly filled
    if (empty($fName)) {
        array_push($errors, "First Name is required");
    }
    if (empty($lName)) {
        array_push($errors, "Last Name is required");
    }
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "<script>alert('The two passwords do not match')</script>");
    }
    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = ($password_1); //encrypt the password before saving in the database
        $query = "INSERT INTO users (fName,lName,username, email,password,userRoll)  VALUES('$fName','$lName','$username', '$email','$password','$user_roll')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        //$_SESSION['userRoll'] = $userroll;
        $_SESSION['success'] = "You are now logged in";
        header('location: home.php');
    }
}
// ... 
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        //SELECT * FROM `users` ORDER BY `users`.`userRoll` ASC
        $results = mysqli_query($db, $query);
        $userroll = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `users` where username='$username'"));
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['userRoll'] = $userroll['userRoll'];
            //$_SESSION['userRoll'] = "hi";
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        } else {

            array_push($errors, "<script>alert('Wrong username/password combination')</script>");
        }
    }
}