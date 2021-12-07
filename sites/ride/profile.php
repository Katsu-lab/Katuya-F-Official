<?php

require_once "classes/crud.php";
$profile = new CRUD;

$row = $profile->get_users($_SESSION['loginId']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "common/head.php"; ?>
  <title>Profile</title>
</head>
<body>


<?php include "common/menu.php"; ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
        <div class="container">
          <div class="breadcrumb-hero" style="background: <?=$_SESSION['color']?>;">
            <h2>Profile</h2>
          </div>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

        <div class="container mt-5">
            <div class="row">

            <!-- PROFILE IMAGE -->
                <div class="col-md-5">
                    <div class="card">

                        <div class="card-img-top">
                            <img src="assets/img/avatar/<?= $row['picture'] ?>" width="100%">
                        </div>

                        <div class="card-body">
                            <form action="userAction.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-0">
                                    <div class="col-md-8 custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="custom-file-1" value="<?= $row['picture'] ?>">
                                        <label class="custom-file-label" for="custom-file-1">Choose Photo</label>
                                    </div>
                                    <button type="submit" class="offset-1 col-md-3 btn btn-success" name="btnUploadPhoto" style="background: <?=$_SESSION['color']?>;">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- PROFILE DETAILS -->
                <div class="col-md-7">

                    <h2 class="h3">Detailed Information</h2><hr>
                    <form action="userAction.php" method="post">


                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="border-radius: 40px 0 0 40px"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" name="first_name" class="form-control" value=<?= $row['first_name'] ?>>
                        <input type="text" name="last_name" class="form-control" style="border-radius: 0 40px 40px 0" value=<?= $row['last_name'] ?>>
                    </div>


                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="border-radius: 40px 0 0 40px"><i class="fas fa-user-circle"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control" style="border-radius: 0 40px 40px 0" value=<?= $row['username'] ?>>
                    </div>

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="border-radius: 40px 0 0 40px"><i class="fas fa-user-circle"></i></div>
                        </div>
                        <input type="color" name="color" class="form-control" style="border-radius: 0 40px 40px 0" value=<?= $row['theme_color'] ?>>
                    </div>

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="border-radius: 40px 0 0 40px"><i class="fas fa-user-circle"></i></div>
                        </div>
                        <textarea name="bio" class="form-control" style="border-radius: 0 40px 40px 0"><?= $row['bio'] ?></textarea>
                    </div>


                    <div class="jumbotron jumbotron-fluid text-white mt-3">
                        <div class="container-fluid text-center">
                            <a href="changePassword.php" class="btn btn-success w-25 mx-3" style="border-radius: 40px">
                                <i class="fas fa-lock"> Change Password</i>
                            </a>
                            <a href="deleteAccount.php" name="btnDelete" class="btn btn-danger w-25 mx-3" style="border-radius: 40px">
                                <i class="fas fa-trash-alt"> Delete Account</i>
                            </a>
                        </div>
                    </div>

                    <button type="submit" class="col-md-4 btn btn-success float-right" name="btnUpdateProfile" style="border-radius: 40px; background: <?=$_SESSION['color']?>;">Save Changes</button>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <?php include "common/footer.php"; ?>

    <?php include "common/JSpart.php"; ?>

    </body>

</html>