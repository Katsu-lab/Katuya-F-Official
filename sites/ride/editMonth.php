<?php

  require_once "classes/crud.php";

  $month = new CRUD;
  $rowMonth = $month->get_month($_SESSION['loginId']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Edit month page</title>
</head>

<body>

<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Edit Month's</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="mt-3">
      <div class="container w-50">
          <form action="userAction.php" method="post">
              <h5>Month's Goal</h5><input type="text" name="mGoal" class="form-control" value="<?= $rowMonth['month_goal']; ?>"><br>
              <h5>Month's ToDo List</h5>
              <div id="input_pluralBox">
              <div id="input_plural">
              <?php
              for($num=1; $num<=10; $num++){
                  $list = "list".$num;
                  if($rowMonth[$list] != NULL){
                    echo "<div>";
                      echo "<input type='text' class='form form-control mt-3' name='".$list."' id='".$list."' placeholder='Add item' value='".$rowMonth[$list]."'>";
                      echo "<input type='button' value='－' class='del pluralBtn' id='".$list."'>";
                    echo "</div>";
                  }else{
                    echo "<div>";
                      echo "<input type='text' class='form form-control mt-3' name='".$list."' id='".$list."' placeholder='Add item' value='".$rowMonth[$list]."'>";
                      // echo "<input type='button' value='＋' class='add pluralBtn id='".$list."''>";
                      echo "<input type='button' value='－' class='del pluralBtn' id='".$list."'>";
                    echo "</div>";
                  }
                }
              ?>
              </div>
              </div>
              <input type="submit" name="btnUpdateMonth" value="Update" class="btn btn-success btn-block mt-3" style="background: <?=$_SESSION['color']?>;">
          </form>

          <script type="text/javascript">
          // $(document).on("click", ".add", function() {
          //     $(this).parent().clone(true).insertAfter($(this).parent());
          // });

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

<?php include "common/JSpart.php"; ?>

</body>

</html>