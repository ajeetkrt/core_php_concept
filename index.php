<?php
session_start();
echo "Welcome ".$_SESSION['name'];
?>
<br>
<?php
###### Star Pattern   ####
for($i=0; $i<=4; $i++){
  for($j=0; $j<=$i; $j++){
      echo "* ";
  }
  echo "<br>";
}
?><br>
<?php
###### Star Pattern   ####
$n = 4;
for($i=0; $i<=$n; $i++){
  for($j=$i; $j<=$n; $j++){
      echo "* ";
  }
  echo "<br>";
}
?><br>
<?php
###### Star Pattern   ####
$n = 4;
for($i=0; $i<=$n; $i++){
  for($j=$n; $j>$i; $j--){
      echo "-";
  }
  for($k=0; $k<=$i; $k++){
    echo "*";
}
  echo "<br>";
}
?><br>
<?php
###### Star Pattern   ####
$n = 4;
for($i=0; $i<=$n; $i++){
  for($k=0; $k<$i; $k++){
    echo " - ";
}
  for($j=$n; $j>=$i; $j--){
      echo "*";
  }
  echo "<br>";
}
?><br>


<?php
###### Star Pattern   ####
$n = 4;
for($i=0; $i<=$n; $i++){
  for($k=$n; $k>$i; $k--){
    echo " - ";
}
  for($j=0; $j<=$i; $j++){
      echo "  * &nbsp";
  }
  echo "<br>";
}
?><br>


<?php
###### Star Pattern   ####
$n = 1;
for($i=0; $i<=3; $i++){
  for($k=0; $k<=$i; $k++){
    echo $n.' ';
    $n++;
}
  echo "<br>";
 
}
?><br>

<?php
###### Star Pattern   ####
for($i=1; $i<=5; $i++){
  for($k=1; $k<=$i; $k++){
    echo $i;
}
  echo "<br>";
 
}
?><br>

<?php
###### Star Pattern   ####
for($i=1; $i<=5; $i++){
  for($k=1; $k<=$i; $k++){
    echo $k;
}
  echo "<br>";
}
?><br>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|User</title>
</head>
<body>

<?php
  if(isset($_SESSION['image']))
 {
       ?>
 <img src="uploads/<?php echo $_SESSION['image'];?>" width=50 height=50 alt=Image path Invalid name=image />
  <?php } ?>
<a href="logout.php">Logout</a>
</body>
</html>