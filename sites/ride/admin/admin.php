
<?php

    require_once "../classes/crud.php";
    require_once "classes/memberClass.php";

    if($_SESSION['status'] == "U"){
        header("location: ../logout.php");
        exit;
      }

    $users = new CRUD;
    $member = new Member;
    $rowUsers = $users->get_users();

    $num=0;
    foreach($rowUsers as $key=>$memberRow){
      if($memberRow['status'] != "A"){
        $num++;
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/adminHead.html"; ?>
  <title>Users</title>
</head>

<body>

<?php include "common/adminMenu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Users</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <?php
          foreach($rowUsers as $key=>$memberRow){
            if($memberRow['status'] != "A"){
              $member->generate_member($memberRow['first_name'],$memberRow['last_name'],$memberRow['picture'],$memberRow['bio'],$memberRow['user_id']);
            }
          }
        ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <section class="container w-75 text-center">
    <h2>Users（<?=$num;?>）</h2>
        <table class="mt-5 table table-striped">
            <th colspan="2">Username</th>
            <th colspan="2">Name</th>
            <th></th>

            <?php
                foreach($rowUsers as $row){
                    if($row['status'] != "A"){
                        echo "<tr>";
                            echo "<td colspan='2'><a href='fileList.php?id=".$row['user_id']."'>".$row['username']."</a></td>";
                            echo "<td colspan='2'>".$row['first_name']." ".$row['last_name']."</td>";
                            echo "<td><a class='btn btn-danger' name='delete' href='../userAction.php?action3=deleteUser&id=".$row['user_id']."'>Delete</a></td>";
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