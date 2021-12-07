
<?php

// if($_SESSION['status'] == "U"){
//     header("location: ../logout.php");
//     exit;
//   }

  require_once "../classes/crud.php";
  $portfolios = new CRUD;
  $rowPortfolios = $portfolios->get_all_portfolios();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/adminHead.html"; ?>
<title>Materials</title>
</head>

<body>

<?php include "common/adminMenu.php"; ?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h2>Portfolios</h2>
      </div>
    </div>
  </div>
</section><!-- End Breadcrumbs -->


<section class="container w-75 text-center mt-5">
    <h1>Works（<?=count($rowPortfolios)?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Title</th>
        <th colspan="2">Producer</th>
        <th></th>
        <?php
            foreach($rowPortfolios as $row){
                echo "<tr>";
                    echo "<td colspan='4'><a href='../assets/work/material/".$row['work_material']."'>".$row['work_name']."</a></td>";
                    echo "<td colspan='2'>".$row['first_name']." ".$row['last_name']."</td>";
                    echo "<td><a class='btn btn-success' name='details' href='portfolioDetails.php?id=".$row['work_id']."'>Details</a></td>";
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