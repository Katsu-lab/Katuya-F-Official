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
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Add Project</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="mt-3">
      <div class="container w-50">
          <form action="userAction.php" method="post" enctype="multipart/form-data">
              <h5>Name</h5><input type="text" name="name" class="form-control" required><br>
              <h5>Picture</h5><input type="file" name="picture" class="" required><br><br>
              <h5>Summary</h5><textarea name="summary" class="form-control" rows="10" required></textarea>

              <input type="submit" name="btnAddProject" value="Add" class="btn btn-success btn-block mt-4" style="background: <?=$_SESSION['color']?>;">
          </form>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>


<?php include "common/JSpart.php"; ?>

</body>

</html>