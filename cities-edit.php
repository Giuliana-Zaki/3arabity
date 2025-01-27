<?php
include 'basic.php';
if (isset($_POST["name"])) {
  cities_update($_POST["id"],$_POST["name"],$_FILES["image"]);
}
$city=cities_edit($_GET["id"]);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit City - <?php echo $app_name ?></title>
    <?php include 'head-assets.php';?>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <h1 class="display-1">Edit City</h1>
            <form action="cities-edit.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-4">
                    <input class="form-control" type="hidden" name="id" value="<?php echo $city['id']; ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="Image">Image</label>
                    <img class="city-logo-edit" src="img/cities/<?php echo $city['image']; ?>"><br><br>
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="form-group mb-4">
                    <label for="Name">Name</label>
                    <input class="form-control" type="text" name="name" value="<?php echo $city['name']; ?>">
                </div>
                <button class="btn btn-success" type="submit" name="button">Save</button>
                <a class="btn btn-secondary" href="cities-list.php">Back</a>
            </form>
        </div>
    </div>

</body>

</html>
