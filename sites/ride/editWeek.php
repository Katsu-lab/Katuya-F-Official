<?php

  require_once "classes/crud.php";

  $week = new CRUD;
  $rowWeek = $week->get_week($_SESSION['loginId']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Edit week page</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Edit Week's</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="mt-3">
      <div class="container w-50">
          <form action="userAction.php" method="post">
              <h5>Week's Goal</h5><input type="text" name="wGoal" class="form-control" value="<?= $rowWeek['week_goal']; ?>"><br>
              <h5>Week's ToDo List</h5>
              <div id="input_pluralBox">
              <div id="input_plural">
              <?php
              for($num=1; $num<=10; $num++){
                  $list = "list".$num;
                  if($rowWeek[$list] != NULL){
                    echo "<div>";
                      echo "<input type='text' class='form form-control mt-3' name='".$list."' id='".$list."' placeholder='Add item' value='".$rowWeek[$list]."'>";
                      echo "<input type='button' value='－' class='del pluralBtn' id='".$list."'>";
                    echo "</div>";
                  }else{
                    echo "<div>";
                      echo "<input type='text' class='form form-control mt-3' name='".$list."' id='".$list."' placeholder='Add item' value='".$rowWeek[$list]."'>";
                      echo "<input type='button' value='－' class='del pluralBtn' id='".$list."'>";
                    echo "</div>";
                  }
                }
              ?>
              </div>
              </div>
              <input type="submit" name="btnUpdateWeek" value="Update" class="btn btn-success btn-block mt-3">
          </form>

        <script type="text/javascript">
          // RESET FORM VALUE
          $(document).on("click", ".del", function() {
            let id = "#" + this.id;
            $(id).val(null);
          });
        </script>
      </div>
    </section>

  </main><!-- End #main -->

<?php include "common/footer.php"; ?>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<?php include "common/JSpart.php"; ?>

</body>


</html>
