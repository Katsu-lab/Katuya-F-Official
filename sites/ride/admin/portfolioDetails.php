<?php

require_once "../classes/crud.php";

$work = new CRUD;

$rowWork = $work->get_work($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/adminHead.html"; ?>
  <title>Portfolio Details</title>
</head>

<body>
<?php include "common/adminMenu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Portfolio Details</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="portfolioTable.php">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container container text-center">
          <img src="../assets/img/work/picture/<?=$rowWork['work_picture']?>" class="img-fluid w-75" alt="">

          <div class="portfolio-info">
            <h3>Work information</h3>
            <ul>
              <li><strong>Name</strong>: <?=$rowWork['work_name']?></li>
              <li><strong>Producer</strong>: <?=$rowWork['first_name'].$rowWork['last_name']?></li>
              <li><strong>Project URL</strong>: <a href="https://ks.mi.s.osakafu-u.ac.jp/projects?lang=en">Seta Laboratory</a></li>
              <li><strong>Technique</strong>: <?=$rowWork['work_technique']?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><a href="../assets/work/material/<?=$rowWork['work_material']?>"><?=$rowWork['work_name']?></a></h2>
          <p><?=$rowWork['work_content']?></p>
        </div>

      </div>

    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include "../common/footer.php"; ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <?php include "common/JSpart.php"; ?>

</body>

</html>