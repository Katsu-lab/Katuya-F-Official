<?php

require_once "classes/crud.php";
require_once "classes/paperClass.php";

$paper = new Paper;
$papers = new CRUD;

$rowCategories = $papers->get_pCategories()
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Papers</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Papers</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- <ol>
          <li>All</li>
          <li>AI</li>
          <li>Education</li>
        </ol> -->
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services mt-3">
      <div class="container">
        <div class="row">
        <?php
          foreach($rowCategories as $key=>$paperRow){
            $paper->generate_paper($paperRow['pCategory_name'],$paperRow['pCategory_explanation'],$paperRow['pCategory_icon'],$paperRow['pCategory_color'],$paperRow['pCategory_id']);
          }
        ?>
        </div>
      </div>

      <div class="container w-25">
        <a href="addPaper.php" class="btn btn-success btn-block mt-4" name="btnAddPaper" style="background: <?=$_SESSION['color']?>;"><i class="far fa-plus-square"></i>Add Paper</a>
      </div>

    </section><!-- End Services Section -->


  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<?php include "common/JSpart.php"; ?>

</body>

</html>