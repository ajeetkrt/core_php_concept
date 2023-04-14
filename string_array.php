



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
##   Reverse int value using php function
##  int
$int = 67;
var_dump($int)." Int value";
echo "<br>";
## int convert to string
$str = strval($int);
var_dump($str)."Int convert to string";
echo "<br>";
$strrev = strrev($str);
var_dump($strrev)."String Reverse";
echo "<br>";
$convertoint = (int)$strrev;
var_dump($convertoint)."Again Convert to int";
echo "<br>";
?>  <h3>Count int value without using php function</h3>
<?php
 $num = 12345678901;
     $count = 0;
   while($num > 0){
       $temp = $num % 10 ;
       $val = $count * 10 + $temp;
       $num = (int)($num / 10);
      $count++;
   }
   echo $count;
?>
<h3>Reverse int value without using php function</h3>
<?php
     $val =  123456789;
   $rev_num = $val;
   $rev_val = 0;
   while($rev_num > 0){
      $temp = $rev_num % 10 ;
      $rev_val = $rev_val * 10 + $temp ;
      $rev_num = (int)($rev_num / 10);
   }
   echo "Old Value = {$val} And Current Value = {$rev_val}";

?>

 <h3>Armstrong number without using php function</h3>
 <?php
     $value = 371;
     $arm = $value;
     $sum = 0;
     while($arm > 0){
          $mod =  $arm % 10 ;
          $sum = $sum + $mod**3 ;
          $arm = (int)($arm / 10);
     }
     if($value == $sum){
        echo "{$sum} is Armstrong Number";
     }else{
        echo "This is not a armstrong number";
     }
 ?>
<h3>Sum of int value without using php function</h3>
 <?php
   $n = 123456789;  
   $sum = 0;
   while($n > 0){
      $temp = $n % 10;
      $sum = $sum + $temp;
      $n = (int)($n / 10);     
   }
   echo $sum;
 ?>

<h3>Check pelindrom number without using php function</h3>
 <?php
 $palindrome = 121;
 $val = $palindrome;
 $num = 0;

 while($val > 0){
      $a = $val % 10;
      $num = $num * 10 + $a ;
      $val = (int)($val / 10); 
 }
   //  echo $num;
 if($palindrome == $num){
    echo "This value : {$num} is palindrome number";
 }else{
    echo "This is not a palindrome number";
 }
 ?>
 <h3>Check prime number without using php function</h3>
 <?php
     $n = 7 ;
     $f = 0;
     for($i = 2; $i < $n ; $i++){
          if($n % $i == 0){
              $f = 1;
              break;
          }
     }
     if($f == 0){
         echo "This is a prime number";
     }else{
        echo "This is not a prime number";
     }
 ?>
 <h3>Check even and odd number without using php function</h3>
 <?php
 
 ?>
 <h3>Check factorial number without using php function</h3>
 <?php
     $str = array('10','20', '30', '40', '50');
      
 ?>

<h3>Swap value without using third variable</h3>
 <?php
   $a = 10;
   $b = 7;
   $b = $a + $b;
   $a = $b - $a;  
   $b = $b - $a;
   echo "$a  and $b";
 ?>
 
 <h3>Write a function to sort an array</h3>
 <?php
 $numarr=array('100','200','50','20','40','9','70','15','10','3');

 echo "Before sorting: ";
 echo "<br />";
 print_r($numarr);
 
 for($j = 0; $j < count($numarr); $j ++) {
     for($i = 0; $i < count($numarr)-1; $i ++){
         if($numarr[$i] > $numarr[$i+1]) {
             $temp = $numarr[$i+1];
             $numarr[$i+1]=$numarr[$i];
             $numarr[$i]=$temp;
         }       
     }
 }
 
 echo "After sorting: ";
 echo "<br />";
 print_r($numarr);

 ?>
 
 <h3>## Check 7 is exist or not</h3>
 <?php

$list = array(1,2,3,4,5);
if(in_array(5,$list)){
    echo "This value is exist.";
}else{
    echo "Not exist";
}

?> 
<h3>Remove first 2 value</h3>
<?php
$str = "911234591";
 $fstr = substr($str, 2);
 echo $fstr;
 ?> 
 <br>
<h3>Question for associative array</h3>
 <p> Write a php script to sort the following associative array</p>
  <p>array("ajeet"=>"25","sujeet"=>"26","mohit"=>"23","mohan"=>"34","ajeet"=>"18");</p> 
<ul>
  <ol>a>. Ascending order sort by value</ol> 
<?php
   #### Use array function 
   $array1 = array("sumeet"=>"25","sujeet"=>"26","mohit"=>"23","mohan"=>"34","ajeet"=>"18");  
     asort($array1);
     foreach($array1 as $key=>$value){
      //  echo "Name &nbsp &nbsp Age";
        echo $key. "&nbsp &nbsp". $value. "<br>";
     }
 ?>
 <ol>b>. Ascending order sort by key</ol> 
<?php
  $array3 = array("ajeet"=>"25","sumeet"=>"25","sujeet"=>"26","mohit"=>"23","mohan"=>"34","ajeet"=>"18");   
  ksort($array3);
  foreach($array3 as $key1=>$value1){
    echo $key1. "&nbsp &nbsp". $value1. "<br>";
  }
 ?>
 <ol>c>. Decending order sorting by value</ol> 
<?php
    $array4 = array("ajeet"=>"25","sumeet"=>"25","sujeet"=>"26","mohit"=>"23","mohan"=>"34","ajeet"=>"18");  
    arsort($array4);
    foreach($array4 as $key2=>$value2){
        echo $key2. "&nbsp &nbsp". $value2. "<br>";
    }

?>
 <ol>d>. Decending order sorting by key</ol> 
<?php
    $array5 = array("ajeet"=>"25","sumeet"=>"25","sujeet"=>"26","mohit"=>"23","mohan"=>"34","ajeet"=>"18");   
     krsort($array5);
     foreach($array5 as $key5=>$value3){
        echo $key5. "&nbsp &nbsp". $value3. "<br>";
     }
 
 ?>
 </ul>
</body>
</html>