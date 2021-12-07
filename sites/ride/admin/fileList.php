
<?php

// if($_SESSION['status'] == "U"){
//     header("location: ../logout.php");
//     exit;
//   }

  require_once "../classes/crud.php";
  $information = new CRUD;
  $rowUser = $information->get_user($_GET['id']);
  $rowProjects = $information->get_projects($_GET['id']);
  $rowPapers = $information->get_papers2($_GET['id']);
  $rowPortfolios = $information->get_works($_GET['id']);

  $num = 0;
  foreach($rowPapers as $row){
        $num++;
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/adminHead.html"; ?>
<title>Files</title>
</head>

<body>

<?php include "common/adminMenu.php"; ?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h2><?=$rowUser['username']?>'s File List</h2>
      </div>
    </div>
  </div>
</section><!-- End Breadcrumbs -->


<section class="container w-75 text-center mt-5">
    <h1>Projects（<?=count($rowProjects)?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Project Name</th>
        <?php
            foreach($rowProjects as $row){
                echo "<tr>";
                    echo "<td colspan='4'><a href='paperTable.php?id=".$row['project_id']."'>".$row['project_name']."</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</section>


<section class="container w-75 text-center mt-3">
    <h1>Papers（<?=$num?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Title</th>
        <th colspan="2">Author</th>
        <th>Published Date</th>
        <th></th>
        <?php
            foreach($rowPapers as $row){
                if($row['status'] == "A"){
                    echo "<tr>";
                        echo "<td colspan='4'><a href='../assets/paper/".$row['paper_content']."'>".$row['paper_title']."</a></td>";
                        echo "<td colspan='2'>".$row['paper_author']."</td>";
                        echo "<td>".$row['published_date']."</td>";
                        echo "<td><a class='btn btn-danger' name='delete' href='../userAction.php?action2=archivePaper&id=".$row['paper_id']."'>Archive</a></td>";
                    echo "</tr>";
                }
            }

            foreach($rowPapers as $row){
                if($row['status'] == "D"){
                    echo "<tr>";
                        echo "<td colspan='4'><a href='../assets/paper/".$row['paper_content']."'>".$row['paper_title']."</a></td>";
                        echo "<td colspan='2'>".$row['paper_author']."</td>";
                        echo "<td>".$row['published_date']."</td>";
                        echo "<td><a class='btn btn-primary' name='delete' href='../userAction.php?action5=publishPaper&id=".$row['paper_id']."'>Publish</a></td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</section>



<section class="container w-75 text-center mt-3">
    <h1>Portfolios（<?=count($rowPortfolios)?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Work Title</th>
        <?php
            foreach($rowPortfolios as $row){
                echo "<tr>";
                    echo "<td colspan='4'><a href='../assets/work/material/".$row['work_material']."'>".$row['work_name']."</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</section>



</main><!-- End #main -->

<?php include "../common/footer.php"; ?>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php include "common/JSpart.php"; ?>

</body>

</html>