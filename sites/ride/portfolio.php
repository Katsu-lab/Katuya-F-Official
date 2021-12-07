<?php

require_once "classes/crud.php";
require_once "classes/portfolioClass.php";

$work = new Work;
$works = new CRUD;

$rowWorks = $works->get_works($_SESSION['loginId']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Portfolio</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- <ol>
          <li>All</li>
          <li>System</li>
          <li>Service</li>
          <li>Idea</li>
        </ol> -->
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row portfolio-container mt-5" data-aos="fade-up">
        <?php
          foreach($rowWorks as $key=>$rowWork){
            $work->generate_work($rowWork['work_name'],$rowWork['work_picture'], $rowWork['work_id']);
          }
        ?>
      </div>

      <div class="container w-25">
        <a href="addWork.php" class="btn btn-success btn-block mt-4" name="btnAddWork" style="background: <?=$_SESSION['color']?>;"><i class="far fa-plus-square"></i>Add Work</a>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php include "common/footer.php"; ?>


  <?php include "common/JSpart.php"; ?>

</body>

</html>