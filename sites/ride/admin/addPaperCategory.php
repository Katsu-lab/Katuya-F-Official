<?php

    require_once "../classes/crud.php";

    // if($_SESSION['status'] == "U"){
    //     header("location: logout.php");
    //     exit;
    //   }


?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/adminHead.html"; ?>
  <title>Add Paper Category</title>
</head>

<body>

<?php include "common/adminMenu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Add Paper Category</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section>
      <div class="container w-75">
          <form action="../userAction.php" method="post">
            <div class="row mt-3">
                <h5>Category Name</h5><input type="text" name="name" class="form-control" required>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6"><h5>Icon</h5><input type="text" name="icon" class="form-control" required></div>
                <div class="col-lg-6"><h5>Color</h5><input type="color" name="color" class="form-control" required></div>
            </div>
                <div class="mt-4">
                    <h5>Explanation</h5><textarea name="explanation" class="form-control" rows="6" required></textarea>
                </div>
            <div class="text-right"><input type="submit" class="btn btn-block btn-success mt-4" name="btnAddpCategory" value="Add"></div>
          </form>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "../common/footer.php"; ?>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php include "common/JSpart.php"; ?>

</body>

</html>