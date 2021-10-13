<!DOCTYPE html>
<html>

<head>

  <title>Criminal Case Record Management System</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
    type="text/css">
  <style>
  body {
    background-size: cover;
    background-image: url("img/gettyimages (1).jpg");
    background-position: center;
  }

  body,
  html {
    width: 100%;
    height: 100%;
    font-family: "Lato";
    color: white;
  }

  h1 {
    font-weight: 700;
    font-size: 5em;
  }


  .content {
    padding-top: 25%;
    text-align: center;
    text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4),
      0px 8px 13px rgba(0, 0, 0, 0.1),
      0px 18px 23px rgba(0, 0, 0, 0.1);
  }

  hr {
    width: 250px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  }
  </style>

</head>

<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><b>Criminal Case Record Portal</b></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php">User Login<i class="fa fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="content">
          <h1>Do You Have a Criminal Case to File?</h1>
          <h3>Login Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
          <hr>
          <a href="login.php" class="btn btn-default btn-lg" role="button" aria-pressed="true">Login In
            Here!</a>
        </div>
      </div>
    </div>
  </div>



  <script type="text/javascript" src="vendor/jquery/jquery.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>