<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Add Project</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero"  style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Add Material</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section>
      <div class="container w-75">
          <form action="userAction.php" method="post" enctype="multipart/form-data">
            <div class="row mt-3">
                <div class="col-lg-3"><h5>Date</h5><input type="date" name="date" class="form-control" required></div>
                <div class="col-lg-9"><h5>Title</h5><input type="text" name="name" class="form-control" required></div>
            </div>
                <div class="mt-4"><input type="file" name="material" class="" required></div>
                <div class="mt-4">
                    <h5>Summary</h5><textarea name="summary" class="form-control" rows="6" required></textarea>
                </div>
                <div class="mt-4">
                    <h5>Advices</h5><textarea name="advice" class="form-control" rows="6" required></textarea>
                </div>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" class="btn btn-block btn-success mt-4" name="btnAddMaterial" value="Add" style="background: <?=$_SESSION['color']?>;">
          </form>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<?php include "common/JSpart.php"; ?>

</body>

</html>