<?php

require_once "classes/crud.php";
$materials = new CRUD;

$materialList = $materials->get_materials($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Meeting Materials</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>MT Materials</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-6 text-left"><a href="addMaterial.php?id=<?=$_GET['id']?>" class="h4" style="color: <?=$_SESSION['color']?>;">Add Material</a></div>
        <div class="col-6 text-right"><a href="https://ks.mi.s.osakafu-u.ac.jp/software/matsuoka/select_sheet.php" class="h4" style="color: <?=$_SESSION['color']?>;">Organize Thoughts</a></div>
      </div>
      <table class="table table-striped text-center mt-2" id="materialList">
        <thead class="thead">
          <tr>
            <th colspan="2">Date</th>
            <th colspan="6">Title</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody class="tbody">
        <?php
          foreach($materialList as $key=>$material){
            if($material['status'] == "A"){
              echo "<tr>";
                echo "<td colspan='2'>".$material['date']."</td>";
                echo "<td colspan='6'><h5>".$material['material_title']."</h5></td>";
                echo "<td class='option'><a class='btn btn-success' name='detail' href='detailedMaterial.php?id=".$material['material_id']."&cid=".$_GET['id']."'>Detail</a></td>";
                echo "<td class='option'><a class='btn btn-info' name='edit' href='editMaterial.php?id=".$material['material_id']."&cid=".$_GET['id']."'>Edit</a></td>";
                echo "<td class='option'><a class='btn btn-danger' name='archive' href='userAction.php?action=archiveMaterial&id=".$material['material_id']."'>Archive</a></td>";
              echo "</tr>";
            }
          }
        ?>
        </tbody>
      </table>
    </div>



  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<?php include "common/JSpart.php"; ?>

</body>

</html>