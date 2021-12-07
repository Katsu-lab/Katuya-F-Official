<?php

require_once("classes/crud.php");

$material = new CRUD;
$rowMaterial = $material->get_material($_GET['id']);
$rowLastMaterial = $material->get_last_material($_GET['id'],$_GET['cid']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Detailed Material</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Detailed Material</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="mt-3" id="material">
      <div class="container">
            <div class="row mt-3">
                <div class="col-6 text-left"><a href="" class="btn btn-primary" style="background: <?=$_SESSION['color']?>;">Prev</a></div>
                <div class="col-6 text-right"><a href="http://localhost:8888/RIDE/detailedMaterial.php?id=3&cid=1" class="btn btn-primary" style="background: <?=$_SESSION['color']?>;">Next</a></div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3"><h5>Date</h5><div name="date" class="h3"><?=$rowMaterial['date']?></div></div>
                <div class="col-lg-9"><h5>Title</h5><div name="title" class="h3"><?=$rowMaterial['material_title']?></div></div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-8">
                    <iframe src="assets/material/<?=$rowMaterial['material_content']?>" width="100%" height="600px"></iframe>
                </div>
                <div class="col-lg-4">
                    <div class="mt-2">
                        <h5>Last MT Summary</h5><div name="lSummary" class="comment"><?=$rowLastMaterial['material_summary']?></div>
                    </div>
                    <div class="mt-3">
                        <h5>This MT Summary</h5><div name="tSummary" class="comment"><?=$rowMaterial['material_summary']?></div>
                    </div>
                    <div class="mt-3">
                        <h5>Advices</h5><div name="advice" class="comment"><?=$rowMaterial['material_advice']?></div>
                    </div>
                </div>
            </div>
            <div class="text-right"><a href="editMaterial.php?id=<?=$rowMaterial['material_id']?>&cid=<?=$_GET['cid']?>" class="btn btn-lg btn-success mt-4" style="background: <?=$_SESSION['color']?>;">Edit</a></div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<?php include "common/JSpart.php"; ?>

</body>

</html>