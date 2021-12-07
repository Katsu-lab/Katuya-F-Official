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
  <title>Edit Material</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Edit Material</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="mt-3">
      <div class="container">
          <form action="userAction.php" method="post" enctype="multipart/form-data">
            <div class="row mt-4">
                <div class="col-lg-3"><h5>Date</h5><input type="date" name="date" class="form-control" value="<?=$rowMaterial['date']?>"></div>
                <div class="col-lg-9"><h5>Title</h5><input type="text" name="name" class="form-control" value="<?=$rowMaterial['material_title']?>"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8">
                    <iframe src="assets/material/<?=$rowMaterial['material_content']?>" width="100%" height="600px"></iframe>
                </div>
                <div class="col-lg-4">
                    <div class="mt-2">
                        <h5>Last MT Summary</h5><textarea name="lSummary" class="form-control" rows="6" readonly><?=$rowLastMaterial['material_summary']?></textarea>
                    </div>
                    <div class="mt-3">
                        <h5>This MT Summary</h5><textarea name="tSummary" class="form-control" rows="6"><?=$rowMaterial['material_summary']?></textarea>
                    </div>
                    <div class="mt-3">
                        <h5>Advices</h5><textarea name="advice" class="form-control" rows="6"><?=$rowMaterial['material_advice']?></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <div class="text-right"><input type="submit" class="btn btn-lg btn-success mt-4" name="btnUpdateMaterial" value="Update" style="background: <?=$_SESSION['color']?>;"></div>
          </form>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<?php include "common/JSpart.php"; ?>

</body>

</html>