<?php
include 'basic.php';
if (isset($_GET["id"])) {
  cities_delete($_GET["id"],$_GET["action"]);
}
$data=cities_list();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cities List - <?php echo $app_name ?></title>
    <?php include 'head-assets.php';?>
</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <h1 class="display-1">Cities List</h1>
            <a class="btn btn-dark mt-5 " href="cities-new">New City</a>
            <table class="table table-dark table-bordered table-striped ">
                <tr>
                    <td><b>#</b></td>
                    <td><b>Name</b></td>
                    <td><b>Actions</b></td>
                </tr>
                <?php while ($city=mysqli_fetch_assoc($data)) {?>
                <tr>
                    <td><img class="city-logo-list" src="img/cities/<?php echo $city["image"]; ?>"></td>
                    <td><?php echo $city["name"]; ?></td>
                    <td>
                        <a class="btn btn-primary" href="cities-edit.php?id=<?php echo $city["id"]; ?>">Edit</a>
                        <a class="btn btn-danger" href="cities-list.php?id=<?php echo $city["id"]; ?>&action=delete ">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>
