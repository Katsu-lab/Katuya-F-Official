<?php

require_once "crud.php";

class Project extends CRUD{
    private $name;
    private $concept;
    private $picture;
    private $id;

    public function generate_project($name,$concept,$picture,$id){
        $this->name = $name;
        $this->concept = $concept;
        $this->picture = $picture;
        $this->id = $id;

        echo "<div class='col-md-6 d-flex align-items-stretch mt-4' data-aos='fade-up' data-aos-delay='100'>";
            echo "<div class='card' style='background-image: url(assets/img/project/".$this->picture.");'>";
                echo "<div class='card-body'>";
                    echo "<h5 class='card-title'><a href=''>".$this->name."</a></h5>";
                    echo "<p class='card-text'>".$this->concept."</p>";
                    echo "<div class='read-more'><a href='meeting.php?id=".$this->id."'><i class='icofont-arrow-right'></i> Check  Materials</a></div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }
}




?>