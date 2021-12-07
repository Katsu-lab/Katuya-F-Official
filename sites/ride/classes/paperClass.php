<?php

require_once "crud.php";

class Paper extends CRUD{
    private $name;
    private $explanation;
    private $icon;
    private $color;
    private $id;

    public function generate_paper($name, $explanation, $icon, $color,$id){
    $this->name = $name;
    $this->explanation = $explanation;
    $this->icon = $icon;
    $this->color =$color;
    $this->id =$id;

    echo "<div class='col-md-6'>";
        echo "<div class='icon-box' data-aos='fade-up'>";
            echo "<div class='icon'><i class='las ".$this->icon."' style='color:".$this->color.";'></i></div>";
            echo "<h4 class='title'><a href='paperList.php?id=".$this->id."'>".$this->name."</a></h4>";
            echo "<p class='description'>".$this->explanation."</p>";
        echo "</div>";
    echo "</div>";

    }

}
?>