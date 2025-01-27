<?php
  include 'basic.php';
if(isset($_POST["name"])){
  // echo $_FILES["image"]["name"];
  // echo $_FILES["image"]["size"];
  // echo $_FILES["image"]["type"];
  // echo $_FILES["image"]["tmp_name"];
  $name=$_FILES["image"]["tmp_name"];
  $location="img/cities/";

  $filename=strtolower($_POST["name"]);
  $filename=str_replace(" ","-",$filename);
  $filename=$filename."-logo.png";
  // $filename=str_replace(" ","-",strtolower($_POST["name"]))."-logo.png";
  move_uploaded_file($name,$location.$filename);
  if($_FILES["image"]["name"]==""){
    cities_new($_POST["name"]);
  }else {
    cities_new($_POST["name"],$filename);

  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cities New - <?php echo $app_name; ?></title>
    <?php include 'head-assets.php';?>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <h1 class="display-1">New City</h1>
            <form action="cities-new.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-4">
                    <label for="Image">Image</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="form-group mb-4">
                    <label for="Name">Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <button class="btn btn-success" type="submit" name="button">Save</button>
                <a class="btn btn-secondary" href="cities-list.php">Back</a>
            </form>
        </div>
    </div>

</body>

</html>
