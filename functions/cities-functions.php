<?php
function cities_list($status = "active"){
  global $conn;
  if ($status=="active") {
    $sql = "SELECT * FROM cities WHERE active=1";
  }elseif ($status="deleted") {
    $sql = "SELECT * FROM cities WHERE active=0";
  }
  $data = mysqli_query($conn,$sql);
  return $data;
}
function cities_new($city,$image="default.png"){
  global $conn;
  $sql = "INSERT INTO cities (name,image) VALUES ('$city','$image')";
  mysqli_query($conn,$sql);
  header("Location: cities-list.php");
}
function cities_delete($id,$action){
  global $conn;
  if ($action=="delete") {
    $sql="UPDATE cities SET active=0 WHERE id='$id'";
    $location="cities-list.php";
  }elseif ($action =="restore") {
    $sql="UPDATE cities SET active=1 WHERE id='$id'";
    $location="cities-trash.php";
  }elseif ($action=="forever") {
    $sql="DELETE FROM cities WHERE active=0 AND id='$id'";
    $location="cities-trash.php";
   }

  mysqli_query($conn,$sql);
  header("Location: $location");
}
function cities_edit($id){
  global $conn;
  $sql = "SELECT * FROM cities WHERE id='$id'";
  $data = mysqli_query($conn,$sql);
  $city = mysqli_fetch_assoc($data);
  return $city;
}
function cities_update($id,$name,$imagefile){
  global $conn;
  if($imagefile["name"]!=""){
    $tmp_name=$imagefile["tmp_name"];
    $location="img/cities/";
    $filename=strtolower($name);
    $filename=str_replace(" ","-",$filename);
    $filename=$filename."-logo.png";
    move_uploaded_file($tmp_name,$location.$filename);
    $sql="UPDATE cities SET name = '$name',image='$filename' WHERE id='$id'";
  }else{
    $sql="UPDATE cities SET name = '$name' WHERE id='$id'";
  }
  mysqli_query($conn,$sql);
  header("Location: cities-list.php");

}
 ?>
