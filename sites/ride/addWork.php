<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Add Work</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Add Work</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section>
      <div class="container w-75">
          <form action="userAction.php" method="post" enctype="multipart/form-data">
            <div class="mt-4">
                <h5>Service/System Name</h5><input type="text" name="name" class="form-control" required>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6"><h5>Picture</h5><input type="file" multiple name="picture" class="" required></div>
                <div class="col-lg-6"><h5>Material</h5><input type="file" name="material" class="" required></div>
            </div>
            <div class="mt-4">
                <h5>Contents</h5><textarea name="contents" class="form-control" rows="10" required></textarea>
            </div>
            <div class="mt-4">
                <h5>Technique</h5><textarea name="technique" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mt-4">
                <h5>Other</h5><textarea name="other" class="form-control" rows="3" required></textarea>
            </div>
            <input type="submit" class="btn btn-block btn-success mt-4" name="btnAddWork" value="Add" style="background: <?=$_SESSION['color']?>;">
          </form>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<?php include "common/JSpart.php"; ?>

</body>

</html>