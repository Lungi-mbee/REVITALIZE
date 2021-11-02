<?php

session_start();
session_destroy();

include 'config.php';
include_once($_SERVER['DOCUMENT_ROOT'] . "/login-register/load-page.php");


header("Location:index.html");



?>