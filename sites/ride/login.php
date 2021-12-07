<!DOCTYPE html>
<html lang="en">

<head>
<?php include "common/head.php"; ?>
  <title>Log in</title>
</head>

<body class="bg-light">

<main id="main"  class="mt-0">

  <section id="hero2">
    <div class="hero-container text-center" data-aos="fade-up">
      <h1>RIDE</h1>
        <form action="userAction.php" method="post" class="mt-5 text-center">
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
            <input type="password" name="password" class="form-control mt-3" placeholder="Enter Password">
            <input type="submit" name="btnLogin" class="btn-get-started scrollto mt-5" value="Log In">
        </form>
        <a href="register.php" id="register">Register</a>
    </div>
  </section>

</main>

<?php include "common/JSpart.php"; ?>

</body>

</html>