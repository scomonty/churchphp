<?php
$icons = array("image/0403-twitter2.png", "image/0388-mail.png");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>First United Methodist Church</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body class="animsition">
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand animsition-link" href="index.php">First United Methodist Church</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a class="animsition-link" href="index.php">Home</a></li>
                <li><a class="animsition-link" href="sonshineandrainbows.php">Sonshine and Rainbows</a></li>
               <li class="dropdown">
                  <a href="about.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="animsition-link" href="pastor.php">Our Pastor</a></li>
                    <li><a class="animsition-link" href="what_we_offer.php">What We Offer</a></li>
                    <li class="divider"></li>
                    <li><a class="animsition-link" href="events.php">Events</a></li>
                    <li><a class="animsition-link" href="announcements.php">Announcements</a></li>
                  </ul>
                <li><a class="animsition-link" href="contact.php">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Missions<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="animsition-link" href="mission_one.php">Matt & Kori Podszus - Navigators</a></li>
                    <li class="divider"></li>
                    <li><a class="animsition-link" href="mission_two.php">Nathan and Amy Schmidt - World Gospel</a></li>
                    <li class="divider"></li>
                    <li><a class="animsition-link" href="mission_three.php">Esselstroms - World Impact</a></li>
                    <li class="divider"></li>
                    <li><a class="animsition-link" href="mission_four.php">Youth for Christ</a></li>
                  </ul>
                </li>
                <img id="logo" src='<?php echo $icons[0] ?>'>
                <img id="logo" src='<?php echo $icons[1] ?>'>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>