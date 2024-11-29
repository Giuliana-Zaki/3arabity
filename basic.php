<?php
$conn =mysqli_connect('localhost','root','','3arabity');
$app_name="3arabity";
$logo="company_logo.png";
include 'functions/all.php';
session_start();
$si="/3arabity/sign-in.php";
$su="/3arabity/sign-up.php";
if ($_SERVER["REQUEST_URI"]!=$si && $_SERVER["REQUEST_URI"]!=$su) {
  if(!isset($_SESSION["username"])){
    header("Location: sign-in.php");
  }
}

 ?>
