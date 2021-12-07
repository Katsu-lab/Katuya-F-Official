<?php

  require_once "classes/crud.php";

  $user = new CRUD;

  $row = $user->get_user($_SESSION['loginId']);

?>


<header id="header" class="fixed-top">
<div class="container d-flex">

  <div class="logo mr-auto">
    <h1 class="text-light"><a href="index.php" style="color: #94c045;">RIDE</a></h1> <!-- Research Integrated Development Environment -->
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  </div>

  <nav class="nav-menu d-none d-lg-block">
    <ul>
    <li><a href="profile.php">Welcome: <?= $row['username'] ?></a></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="research.php">Research</a></li>
      <li><a href="paper.php">Paper</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>

      <li class="get-started" ><a href="logout.php">Log Out</a></li>
    </ul>
  </nav><!-- .nav-menu -->

</div>
</header><!-- End Header -->

