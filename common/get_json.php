<?php
if (isset($_GET['lang'])){
    $lang = $_GET['lang'];
}

if ($lang == 'en') {
        $file = "locales/en.json";
    }else {
        $file = "locales/jp.json";
    }
    $json = file_get_contents($file);
    $data = json_decode($json, true);
?>