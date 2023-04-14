
<?php
error_reporting(0);
$conn = new mysqli("localhost","root", "", "image_upload");
$$name = '';
if(isset($_POST['submit'])){ 
$name = $_POST['name'];
$image = $_FILES['image'];
// print_r($image);
// exit;
if(isset($_FILES['image'])){
  $imagename =  $_FILES['image']['name'];
  $tempname =  $_FILES['image']['tmp_name'];
  $randomname = md5(rand(0,15));
$ext = pathinfo($imagename, PATHINFO_EXTENSION);
$dir = "uploads/".$randomname.".".$ext;
   if(move_uploaded_file($tempname, $dir)){
        $imagepath = $dir;
   }
}
if($imagepath !==''){
    $sql = "INSERT INTO `image`(user, image_file) values('$name', '$imagepath')";
   }else{
       $sql = "INSERT INTO `image`(user, image_file) values('$name')";
   }

   $query = mysqli_query($conn, $sql);
   if($query){
     echo "Success";
   }else{
    echo "Try one more time";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?" method="post" enctype="multipart/form-data">
    <label for="key">Username</label> 
    <input type="text" placeholder="Enter Name" name="name" id="name">
    <input type="file" placeholder="select file" name="image" id="image">
      <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>