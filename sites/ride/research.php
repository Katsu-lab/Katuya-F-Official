<?php

require_once "classes/crud.php";
require_once "classes/projectClass.php";

$project = new Project;
$projects = new CRUD;

$rowProjects = $projects->get_projects($_SESSION['loginId']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>My Researches</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Projects</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features mt-3">
      <div class="container">

        <div class="row">
        <?php
          foreach($rowProjects as $key=>$pro){
            $project->generate_project($pro['project_name'],$pro['summary'],$pro['picture'],$pro['project_id']);
          }
        ?>
        </div>

      </div>
      <div class="container w-25">
        <a href="addProject.php" class="btn btn-success btn-block mt-4" name="btnAddProject" style="background: <?=$_SESSION['color']?>;"><i class="far fa-plus-square"></i>Add Project</a>
      </div>
    </section><!-- End Features Section -->



  </main><!-- End #main -->

<?php include "common/footer.php"; ?>


<?php include "common/JSpart.php"; ?>

</body>

</html>