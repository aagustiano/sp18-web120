<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/tables.css" />
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="fa fa-file-code-o" aria-hidden="true"></i> Alexa's WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li>&nbsp;<a href="index.php" class="<?= ($selectedPage == 'index') ? 'selected':''; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
      <li><a href="big/index.php"><i class="fa fa-file-text" aria-hidden="true"></i> Big</a></li>
      <li><a href="aia.php" class="<?= ($selectedPage == 'aia') ? 'selected':''; ?>"><i class="fa fa-users" aria-hidden="true"></i> AIA</a></li>
      <li><a href="flowchart.php" class="<?= ($selectedPage == 'flowchart') ? 'selected':''; ?>"><i class="fa fa-sitemap" aria-hidden="true"></i> Flowchart</a></li>
      <li><a href="fp/index.php"><i class="fa fa-desktop" aria-hidden="true"></i> Final Project</a></li>
      <li><a href="contactme.php" class="<?= ($selectedPage == 'contactme') ? 'selected':''; ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Alexa</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>

    </ul>
  </nav>
</header>
        