<?php

require_once("classes/crud.php");

session_start();
session_unset();
session_destroy();

header("location: login.php");
?>