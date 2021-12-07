<?php

  require_once "classes/crud.php";

  $categories = new CRUD;
  $rowCategories = $categories->get_pCategories();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Add Paper</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Add Paper</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section>
      <div class="container w-75">
          <form action="userAction.php" method="post" enctype="multipart/form-data">
          <div class="mt-4">
                <h5>Title</h5><input type="text" name="title" class="form-control" required></textarea>
            </div>
            <div class="row mt-3">
                <div class="col-md-3"><h5>Published Date</h5><input type="date" name="date" class="form-control" required></div>
                <div class="col-md-9"><h5>First Author</h5><input type="text" name="author" class="form-control" required></div>
            </div>
            <div class="mt-4">
                <h5>Paper</h5><input type="file" name="paper" class="" required>
            </div>
            <div class="mt-4">
                <h5>Summary</h5><textarea name="summary" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mt-4">
                <h5>Good Points</h5><textarea name="good" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mt-4">
                <h5>Bad Points</h5><textarea name="bad" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mt-4">
                <h5>Benefits for Your Research</h5><textarea name="benefit" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mt-4">
                <h5>Categories</h5>
                <div class="row mt-3">
                <?php
                  foreach($rowCategories as $key=>$category){
                    echo "<div class='col-md-3'><input type='checkbox' name='categories[]' value='".$category['pCategory_name']."'> ".$category['pCategory_name']."</div>";
                  }
                ?>
                </div>
            </div>
            <input type="submit" class="btn btn-block btn-success mt-4" name="btnAddPaper" value="Add" style="background: <?=$_SESSION['color']?>;">
          </form>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>


<?php include "common/JSpart.php"; ?>

</body>

</html>