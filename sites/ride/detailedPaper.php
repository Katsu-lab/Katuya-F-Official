<?php

require_once("classes/crud.php");

$paper = new CRUD;
$rowPaper = $paper->get_paper($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Edit Paper</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Edit Paper</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="mt-3">
      <div class="container">
          <form action="userAction.php" method="post" enctype="multipart/form-data">
            <div><h5>Title</h5><div><h3><?=$rowPaper['paper_title']?></h3></div></div>
            <div class="row mt-4">
                <div class="col-lg-4"><h5>Date</h5><div><?=$rowPaper['published_date']?></div></div>
                <div class="col-lg-8"><h5>Author</h5><div><?=$rowPaper['paper_author']?></div></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5">
                    <iframe src="assets/Paper/<?=$rowPaper['paper_content']?>" width="100%" height="600px"></iframe>
                    <div class="mt-2">
                        <h5>For your Research</h5><div name="benefit"><?=$rowPaper['paper_benefit']?></div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="mt-2">
                        <h5>Content</h5><div name="summary" style="height:200px;"><?=$rowPaper['paper_summary']?></div>
                    </div>
                    <div class="mt-3">
                        <h5>Good Point</h5><div name="tSummary" style="height:200px;"><?=$rowPaper['paper_good']?></div>
                    </div>
                    <div class="mt-3">
                        <h5>Bad point</h5><div name="advice" style="height:200px;"><?=$rowPaper['paper_bad']?></div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <div class="text-right"><input type="submit" class="btn btn-lg btn-success mt-3" name="btnUpdatePaper" value="Edit" style="background: <?=$_SESSION['color']?>;"></div>
          </form>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<?php include "common/JSpart.php"; ?>

</body>

</html>