
<?php

// if($_SESSION['status'] == "U"){
//     header("location: ../logout.php");
//     exit;
//   }

  require_once "../classes/crud.php";
  $papers = new CRUD;
  $rowPapers = $papers->get_all_papers();

  $a = 0;
  $d = 0;
  foreach($rowPapers as $row){
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
<title>Papers</title>
</head>

<body>

<?php include "common/adminMenu.php"; ?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="breadcrumb-hero">
    <div class="container">
      <div class="breadcrumb-hero">
        <h2>Papers</h2>
      </div>
    </div>
  </div>
</section><!-- End Breadcrumbs -->


<section class="container w-75 text-center mt-5">
    <div class="row mb-4">
        <div class="offset-6 col-6 text-right"><a href="addPaperCategory.php" class="h4">Add Paper Category</a></div>
    </div>
    <h1>Active Papers（<?=$a?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Title</th>
        <th colspan="2">Author</th>
        <th>Published Date</th>
        <th colspan="2">Publisher</th>
        <th></th>
        <?php
            foreach($rowPapers as $row){
                if($row['status'] == "A"){
                    echo "<tr>";
                        echo "<td colspan='4'><a href='../assets/paper/".$row['paper_content']."'>".$row['paper_title']."</a></td>";
                        echo "<td colspan='2'>".$row['paper_author']."</td>";
                        echo "<td>".$row['published_date']."</td>";
                        echo "<td colspan='2'>".$row['first_name']." ".$row['last_name']."</td>";
                        echo "<td><a class='btn btn-danger' name='delete' href='../userAction.php?action2=archivePaper&id=".$row['paper_id']."'>Archive</a></td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</section>

<section class="container w-75 text-center">
    <h1>Inactive Papers（<?=$d?>）</h1>
    <table class="mt-3 table table-striped">
        <th colspan="4">Title</th>
        <th colspan="2">Author</th>
        <th>Published Date</th>
        <th colspan="2">Publisher</th>
        <th></th>
        <?php
            foreach($rowPapers as $row){
                if($row['status'] == "D"){
                    echo "<tr>";
                        echo "<td colspan='4'><a href='../assets/paper/".$row['paper_content']."'>".$row['paper_title']."</a></td>";
                        echo "<td colspan='2'>".$row['paper_author']."</td>";
                        echo "<td>".$row['published_date']."</td>";
                        echo "<td colspan='2'>".$row['first_name']." ".$row['last_name']."</td>";
                        echo "<td><a class='btn btn-primary' name='delete' href='../userAction.php?action5=publishPaper&id=".$row['paper_id']."'>Publish</a></td>";
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