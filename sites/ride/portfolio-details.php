<?php

require_once "classes/crud.php";

$work = new CRUD;

$rowWork = $work->get_work($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Portfolio Details</title>
</head>

<body>
<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Portfolio Details</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol> -->
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details mt-4">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/work/picture/<?=$rowWork['work_picture']?>" class="img-fluid" alt="">
            <img src="assets/img/work/picture/<?=$rowWork['work_picture']?>" class="img-fluid" alt="">
            <img src="assets/img/work/picture/<?=$rowWork['work_picture']?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Work information</h3>
            <ul>
              <li><strong>Name</strong>: <?=$rowWork['work_name']?></li>
              <li><strong>Producer</strong>: <?=$rowWork['first_name'].$rowWork['last_name']?></li>
              <li><strong>Project URL</strong>: <a href="https://ks.mi.s.osakafu-u.ac.jp/projects?lang=en" style="color: <?=$_SESSION['color']?>;">Seta Labatory</a></li>
              <li><strong>Technique</strong>: <?=$rowWork['work_technique']?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><a href="assets/work/material/<?=$rowWork['work_material']?>" style="color: <?=$_SESSION['color']?>;"><?=$rowWork['work_name']?></a></h2>
          <p><?=$rowWork['work_content']?></p>
        </div>

      </div>

    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include "common/footer.php"; ?>


  <?php include "common/JSpart.php"; ?>

</body>

</html>