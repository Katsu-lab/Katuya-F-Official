<?php

require_once "classes/crud.php";
$papers = new CRUD;

$paperList = $papers->get_papers($_GET['id'],$_SESSION['loginId']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Papers</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Papers</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container mt-5">
      <table class="table table-striped text-center mt-2" id="materialList">
        <thead class="thead">
          <tr>
            <th>Date</th>
            <th>Author</th>
            <th colspan="6">Title</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody class="tbody">
        <?php
          foreach($paperList as $key=>$paper){
            if($paper['status'] == "A"){
              echo "<tr>";
                echo "<td>".$paper['published_date']."</td>";
                echo "<td>".$paper['paper_author']."</td>";
                echo "<td colspan='6'><h5>".$paper['paper_title']."</h5></td>";
                echo "<td class='option'><a class='btn btn-success' name='detail' href='detailedPaper.php?id=".$paper['paper_id']."&cid=".$_GET['id']."'>Detail</a></td>";
                echo "<td class='option'><a class='btn btn-info' name='edit' href='editPaper.php?id=".$paper['paper_id']."&cid=".$_GET['id']."'>Edit</a></td>";
                echo "<td class='option'><a class='btn btn-danger' name='archive' href='userAction.php?action2=archivePaper&id=".$paper['paper_id']."'>Archive</a></td>";
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