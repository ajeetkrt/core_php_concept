
<?php
error_reporting(0);
session_start();

$conn = new mysqli('localhost','root','','test');
$pass= '';
$email = '';
if(isset($_POST['login'])){
  //  echo "okoook";
  $email = $_POST['email'];
   $pass = $_POST['pass'];

   $sql = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
   $result = mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
    $row= mysqli_fetch_assoc($result);
    if($row['email']===$email && $row['pass']===$pass){
       if($row['role']==="admin"){
      //  echo "Hello Admin";
     // $_SESSION['id'] = $row['id'];
      $_SESSION['name']= $row['name'];
      $_SESSION['image']= $row['image'];
      header("location:index.php");
       }elseif($row['role']==="user"){
        $_SESSION['name']= $row['name'];
        $_SESSION['image']= $row['image'];
        header("location:index.php");
       }
       else{    
          echo "This user not belongs to admin and user";
       }
    }else{
        echo "not ok";
    }
   }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            padding:0px;
            margin:0px;
            overflow:hidden;
        }
        .center{
            top:50%;
            left:50%;
            transform:translate(50%,50%);
            background:#ffe6e6;
            width:500px;
            height:auto;
            border-radius:10px;
        }
        .center h3{
            text-align:center;
            color:red;
        
        }
        .center .input_text{
            text-align:center;
            border:none;
            padding:0px 0px 10px 0px;
        }

        input[type="submit"]{
            width:100%;
            border-radius:15px;
            text-align:center;
            background:blue;
            color:white;
        }
    </style>
</head>
<body>
    <div class="center">
        <h3>Login</h3>
        <form action="?" method="post" >
            <div class="input_text">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter your email" id="email" name="email">
            </div>
            <div class="input_text">
                <label for="pass">Password</label>
                <input type="text" placeholder="Enter your password" id="pass" name="pass">
            </div>
            <input type="submit" value="login" name="login">
        </form>
    </div>
</body>
</html>