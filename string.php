<?php
## 1  substr() - used to extract a part of string.
$name = "Ajeet Kumar Thakur";
echo substr($name, 0,5);
 echo "<br>";

## 2  strlen() - used to count string length.
$name = "Ajeet Kumar Thakur";
echo strlen($name);
 echo "<br>";

 ## 3  trim() - used to remove space.
$name = " Ajeet ";
echo  trim($name);
 echo "<br>";

 ## 4  ltrim() - used to remove left side space.
$name = " Ajeet ";
echo  ltrim($name);
 echo "<br>";

 ## 5  rtrim() - used to remove right side space.
$name = " Ajeet ";
echo  rtrim($name);
 echo "<br>";

## 6  strtolower() - used to make a capital to small.
$name = "GDHFDHFKGF";
echo  strtolower($name);
 echo "<br>";

 ## 7  strtoupper() - used to make a small to capital.
$name = "hdgdjhghjhj";
echo  strtoupper($name);
 echo "<br>";

## 8  str_replace() - used to replace the extract a part of string.
$name = "hdgdjhghjhj";
echo  str_replace("hdgdj","Ajeet",$name);
 echo "<br>";


 ## 8  implode() - used to convert array to string.
$array = [10,20,30,40,50];
echo  implode(",",$array);
 echo "<br>";

 ## 8  explode() - used to convert string to array.
$array = [10,20,30,40,50];
$str =   implode(" , ",$array);
print_r(explode(" , ",$str));
 echo "<br>";

 ##  Check value length without use inbuilt function.
   $num = 12345678901;
//  $val = strval($num);
    $count = 0;
  while($num >0){
      $temp = $num % 10 ;
      $val = $count * 10 + $temp;
      $num = (int)($num / 10);
     $count++;
  }
  echo $count;

//  echo $count;

##  Armstrong number

// $num = 158;

// $a = 1**3;
// $b = 5**3;
// $c = 3**3;
// $d = $a + $b + $c;

// if($num == $d){
//     echo "Armstrong";
// }else{
//     echo "Not armstrong";
// }

?>