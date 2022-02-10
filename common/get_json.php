<?php
if (!True) {
        $file = "locales/jp.json";
    }else {
        $file = "locales/en.json";
    }
    $json = file_get_contents($file);
    $data = json_decode($json, true);

    // echo var_dump(realpath_cache_get());
?>