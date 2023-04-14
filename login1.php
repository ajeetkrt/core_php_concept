<?php
session_start();
$conn = new mysqli('localhost','root','','test');
//if($conn->connect_error){
 // echo "Connection Error".$conn->connect_error();
//}
if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $pass = $_POST['pass'];
   $sql = "SELECT * FROM `users` WHERE name='$name' AND pass='$pass'";
   $res = mysqli_query($conn, $sql);
   if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
     if($row['name']===$name && $row['pass']===$pass){
     $_SESSION['name']=$row['name'];
     $_SESSION['role']=$row['role'];
     $_SESSION['id']=$row['id'];
        header("location:display12.php");
     }else{
        echo "Check again";
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
    <title>login</title>
    <script
  src="https://code.jquery.com/jquery-3.6.2.js">
</script>
<style>
    .validation{
        color:red;
    }
</style>
</head>
<body>
    <h2>Login System</h2>
    <form action="?" method="post" onsubmit=" return validate()">
    <div>
        <label for="inputkey">Username:</label>
        <input type="text" placeholder="Enter UserName" name="user" id="user">
        <div id="uerror" class="validation"></div>
    </div>
    <div>
        <label for="inputkey">Password:</label>
        <input type="password" placeholder="Enter Password" name="pass" id="pass">
        <div id="perror" class="validation"></div>
    </div>
    <input type="submit" value="Submit" name="submit">
    <a href="insert1.php">Add member</a>
    </form>
   
</body>
<script>
    let name = document.getElementById('user');
    let pass = document.getElementById('pass');
    let flag = 1;

    function validate(){
        if(name.value == ''){
            document.getElementById('uerror').innerHTML = "This Field is required";
            flag=0;
        }else{
            document.getElementById('uerror').innerHTML = "";
            flag=1;
        }

        if(pass.value == ''){
            document.getElementById('perror').innerHTML = "This Field is required";
            flag=0;
        }else{
            document.getElementById('perror').innerHTML = "";
            flag=1;
        }

        if(flag){
            return true;
        }else{
            return false;
        }
    }
</script>
</html>