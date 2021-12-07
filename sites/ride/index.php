<?php

  require_once "classes/crud.php";

  if($_SESSION['status'] != "U"){
    header("location: logout.php");
    exit;
  }

  $display = new CRUD;

  date_default_timezone_set("Asia/Tokyo");
  $now = strtotime(date("H:i"));
  $login_time = strtotime(date($_SESSION['iTime']));
  $diff = $now - $login_time;
  $workTime = $diff/60;

  $display->update_week_hours($workTime,$_SESSION['loginId']);

  $rowWeek = $display->get_week($_SESSION['loginId']);
  $rowMonth = $display->get_month($_SESSION['loginId']);
  $weekAve = $display->get_weeks();
  $monthAve = $display->get_months();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>HOME</title>
</head>

<body class="bg-light">

  <?php include "common/menu.php"; ?>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Standing on the shoulders of giants.</h1>
      <!-- <a href="#week" class="btn-get-started scrollto">Let's Research!</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Week Section ======= -->
    <section id="week" class="about">
      <div class="container" data-aos="fade-up">
        <div class="text-center p-3">
          <h1>WEEK</h1>
        </div>

        <div class="row">

          <div class="col-lg-7 video-box text-center">
            <div class="mb-4 p-3 border">
              <h3>Week Goal</h3>
                <h5 class="display-4"><strong><?= $rowWeek['week_goal'] ?></strong></h5>
            </div>
            <div class="row">
              <div class="col-lg-6 p-3">
                <h5>MY WORKING TIME</h5>
                <h5 class="display-4">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up"><?= $rowWeek['week_hours'] ?></span>
                </h5>
              </div>
              <div class="col-lg-6 p-3">
                <h5>MEMBER'S WORKING TIME</h5>
                <h5 class="display-4">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up"><?= round($weekAve,1) ?></span>
                </h5>
              </div>
            </div>
          </div>

          <div class="offset-1 col-lg-4 pt-3 pt-lg-0 content">
            <h2>ToDo List</h2>
            <p class="font-italic">
             Complete these tasks in this week!
            </p>
            <div class="parent">
              <ul>
                <?php
                for($num=1; $num<=10; $num++){
                  $list = "list".$num;
                  if($rowWeek[$list] != NULL){
                    echo "<li><i class='bx bx-check-double'>".$rowWeek[$list]."</i></li><br>";
                  }
                }
                ?>
              </ul>
            </div>
            <div class="child">
              <a href="editWeek.php" class="btn btn-success" style="background: <?=$_SESSION['color']?>;">>Edit</a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Week Section -->

    <!-- ======= Month Section ======= -->
    <section id="month" class="about">
      <div class="container" data-aos="fade-up">
        <div class="text-center p-3">
          <h1>MONTH</h1>
        </div>

        <div class="row">

          <div class="col-lg-7 video-box text-center">
            <div class="mb-4 p-3 border">
              <h3>Month Goal</h3>
                <h5 class="display-4"><strong><?= $rowMonth['month_goal'] ?></strong></h5>
            </div>
            <div class="row">
              <div class="col-lg-6 p-3">
                <h5>MY WORKING TIME</h5>
                <h5 class="display-4">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up"><?= $rowMonth['month_hours']?></span>
                </h5>
              </div>
              <div class="col-lg-6 p-3">
                <h5>MEMBER'S WORKING TIME</h5>
                <h5 class="display-4">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up"><?= round($monthAve,1) ?></span>
                </h5>
              </div>
            </div>
          </div>

          <div class="offset-1 col-lg-4 pt-3 pt-lg-0 content">
            <h2>ToDo List</h2>
            <p class="font-italic">
             Complete these tasks in this month!
            </p>
            <div class="parent">
              <ul>
              <?php
                for($num=1; $num<=10; $num++){
                  $list = "list".$num;
                  if($rowMonth[$list] != NULL){
                    echo "<li><i class='bx bx-check-double'>".$rowMonth[$list]."</i></li><br>";
                  }
                }
              ?>
              </ul>
            </div>
            <div class="child">
              <a href="editMonth.php" class="btn btn-success" style="background: <?=$_SESSION['color']?>;">>Edit</a>
            </div>
        </div>
      </div>
    </section><!-- End Week Section -->


  </main>
  <!-- End #main -->

 <?php include "common/footer.php"; ?>

  <?php include "common/JSpart.php"; ?>

</body>

</html>