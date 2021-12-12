<?php
if (True) {
        $file = "locals/jp.json";
    }else {
        $file = "locals/en.json";
    }
    $json = file_get_contents($file);
    $data = json_decode($json, true);
?>