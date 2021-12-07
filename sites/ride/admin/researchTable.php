
<?php

// if($_SESSION['status'] == "U"){
//     header("location: ../logout.php");
//     exit;
//   }

  require_once "../classes/crud.php";
  $materials = new CRUD;
  $rowMaterials = $materials->get_all_materials();

  $a = 0;
  $d = 0;
  foreach($rowMaterials as $row){
    if($row['status'] == "A"){
        $a++;
    }else{
        $d++;
    }
}
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
        <h2>Materials</h2>
      </div>
    </div>
  </div>
</section><!-- End Breadcrumbs -->


<section class="container w-75 text-center mt-5">
    <h1>Active Materials（<?=$a?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Title</th>
        <th colspan="2">Author</th>
        <th>Meeting Date</th>
        <th></th>
        <?php
            foreach($rowMaterials as $row){
                if($row['status'] == "A"){
                    echo "<tr>";
                        echo "<td colspan='4'><a href='../assets/material/".$row['material_content']."'>".$row['material_title']."</a></td>";
                        echo "<td colspan='2'>".$row['first_name']." ".$row['last_name']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td><a class='btn btn-danger' name='delete' href='../userAction.php?action=archiveMaterial&id=".$row['material_id']."'>Archive</a></td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</section>

<section class="container w-75 text-center mt-3">
    <h1>Inactive Materials（<?=$d?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Title</th>
        <th colspan="2">Author</th>
        <th>Meeting Date</th>
        <th></th>
        <?php
            foreach($rowMaterials as $row){
                if($row['status'] == "D"){
                    echo "<tr>";
                        echo "<td colspan='4'><a href='../assets/material/".$row['material_content']."'>".$row['material_title']."</a></td>";
                        echo "<td colspan='2'>".$row['first_name']." ".$row['last_name']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td><a class='btn btn-primary' name='delete' href='../userAction.php?action4=publishMaterial&id=".$row['material_id']."'>Publish</a></td>";
                    echo "</tr>";
                }
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