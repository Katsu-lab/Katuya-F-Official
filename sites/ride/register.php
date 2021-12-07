<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Register</title>
</head>

<body class="bg-light">

<main id="main"  class="mt-0">

  <section id="hero2">
    <div class="hero-container text-center" data-aos="fade-up">


    <div class="card mt-5 w-50">
        <div class="card-header">
            <h3>REGISTRATION</h3>
        </div>
        <div class="card-body">
            <form action="userAction.php" method="post">
                <input type="text" name="fname" class="form-control mt-3" placeholder="First Name">
                <input type="text" name="lname" class="form-control mt-3" placeholder="Last Name">
                <input type="text" name="username" class="form-control mt-3" placeholder="Username">
                <input type="password" name="passw" class="form-control mt-3" placeholder="Password">
                <input type="password" name="confPassw" class="form-control mt-3" placeholder="Confirmation Password">

                <input type="submit" class="btn btn-success btn-block mt-2" name="btnRegister" value="Register">
        </div>
        <div class="card-footer">
            <a href="login.php" class="float-right">Log In</a>
        </div>
    </div>


    </div>
  </section>

</main>

<?php include "common/JSpart.php"; ?>

</body>

</html>