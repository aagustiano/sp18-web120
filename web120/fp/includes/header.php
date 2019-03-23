<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/fp.css" />
<link rel="stylesheet" href="css/form.css" />
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
<a href="index.php"> <img src="images/chonglogo.png" class="logo" alt="logo"></a>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="<?= ($activePage == 'index') ? 'selected':''; ?>">home</a></li>
      <li><a href="music.php" class="<?= ($activePage == 'music') ? 'selected':''; ?>">music</a></li>
      <li><a href="tour.php" class="<?= ($activePage == 'tour') ? 'selected':''; ?>">tour</a></li>
      <li><a href="merch.php" class="<?= ($activePage == 'merch') ? 'selected':''; ?>">merch</a></li>
      <li><a href="contact.php" class="<?= ($activePage == 'contact') ? 'selected':''; ?>">contact</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
