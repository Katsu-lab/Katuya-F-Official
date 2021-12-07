<?php

require_once "crud.php";

    class Work extends CRUD{
        private $name;
        private $picture;
        private $id;

        public function generate_work($name, $picture, $id){
        $this->name = $name;
        $this->picture = $picture;
        $this->id = $id;

        echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app'>";
            echo "<div class='portfolio-wrap'>";
              echo "<img src='assets/img/work/picture/".$this->picture."' class='img-fluid' alt=''>";
              echo "<div class='portfolio-info'>";
                echo "<h4>".$this->name."</h4>";
                echo "<div class='portfolio-links'>";
                  echo "<a href='assets/img/work/picture/".$this->picture."' data-gall='portfolioGallery' class='venobox' title='".$this->name."'><i class='bx bx-plus'></i></a>";
                  echo "<a href='portfolio-details.php?id=".$this->id."' title='More Details'><i class='bx bx-link'></i></a>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
        echo "</div>";

        }

    }
?>