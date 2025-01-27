<?php
include 'basic.php';
if (isset($_POST["name"])){
  colors_new($_POST["name"],$_POST["code"]);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Color - <?php echo $app_name ?></title>
    <?php include 'head-assets.php';?>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <h1 class="display-1">New Color</h1>
            <form action="colors-new" method="post">
                <div class="form-group mb-4">
                    <label for="Name">Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group mb-4">
                    <label for="Code">Code</label>
                    <input class="form-control" type="text" name="code">
                </div>
                <button class="btn btn-success" type="submit" name="button">Save</button>
                <a class="btn btn-secondary" href="colors-list.php">Back</a>
            </form>
        </div>
    </div>

</body>

</html>
