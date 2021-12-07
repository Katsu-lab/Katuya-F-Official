<?php

require_once "../classes/crud.php";

class Member extends CRUD{
    private $firstName;
    private $lastName;
    private $avatar;
    private $bio;
    private $id;

    public function generate_member($firstName,$lastName,$avatar,$bio,$id){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->avatar = $avatar;
    $this->bio = $bio;
    $this->id = $id;

    echo "<div class='col-lg-4 col-md-6 d-flex align-items-stretch'>";
    echo "<div class='container member' data-aos='fade-up'>";
      echo "<div class='member-img'>";
        echo "<a href='fileList.php?id=".$this->id."'><img src='../assets/img/avatar/".$this->avatar."' class='img-fluid p-5' alt=''></a>";
        echo "<div class='social'>";
          echo "<a href=''><i class='icofont-twitter'></i></a>";
          echo "<a href=''><i class='icofont-facebook'></i></a>";
          echo "<a href=''><i class='icofont-instagram'></i></a>";
          echo "<a href=''><i class='icofont-linkedin'></i></a>";
        echo "</div>";
      echo "</div>";
      echo "<div class='member-info'>";
        echo "<h4>".$this->firstName." ".$this->lastName."</h4>";
        echo "<span>User</span>";
        echo "<p>".$this->bio."</p>";
      echo "</div>";
    echo "</div>";
  echo "</div>";

    }

}
?>