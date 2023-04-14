<?php
$conn = new mysqli('localhost','root','','test');
if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = $_POST['pass'];
    if(isset($_FILES['image'])){
        $img = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $randomname = md5(rand(0,15));
        $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
        $dir = 'uploads/'.$randomname.'.'.$ext;
       if(move_uploaded_file($tmp_name, $dir)){
              $imgpath = $dir;
             // print_r($imgpath);
             // exit;
       }
    }
  $query = "INSERT INTO `users`(name, image, email , pass, role) values('$name','$imgpath','$email','$pass','$role')";
   $result = mysqli_query($conn, $query);
  
  if($result){
    header("location:login1.php");
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
    <h2>Create User</h2>
    <form action="?" method="post" onsubmit=" return validate()" enctype="multipart/form-data">
    <div>
        <label for="inputkey">Username:</label>
        <input type="text" placeholder="Enter UserName" name="user" id="user">
        <div id="uerror" class="validation"></div>
    </div>
    <div>
        <label for="inputkey">Email:</label>
        <input type="text" placeholder="Enter Email" name="email" id="email">
        <div id="eerror" class="validation"></div>
    </div>
    <div>
        <label for="inputkey">Image:</label>
        <input type="file" placeholder="Select image file" name="image" id="image">
        <div id="ierror" class="validation"></div>
    </div>
    <div>
        <select name="role" id="role">
            <option value="">Select Role Type</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
        <div id="serror" class="validation"></div>
    </div>
    <div>
        <label for="inputkey">Password:</label>
        <input type="password" placeholder="Enter Password" name="pass" id="pass">
        <div id="perror" class="validation"></div>
    </div>
    <input type="submit" value="Submit" name="submit">
    <a href="login1.php">Back to login</a>
    </form>
   
</body>
<!-- <script>
    let name = document.getElementById('user');
    let pass = document.getElementById('pass');
    let image = document.getElementById('image');
    let email = document.getElementById('email');
    let role = document.getElementById('role');
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

        if(image.value == ''){
            document.getElementById('ierror').innerHTML = "This Field is required";
            flag=0;
        }else{
            document.getElementById('ierror').innerHTML = "";
            flag=1;
        }

        if(email.value == ''){
            document.getElementById('eerror').innerHTML = "This Field is required";
            flag=0;
        }else{
            document.getElementById('eerror').innerHTML = "";
            flag=1;
        }

        if(role.value == ''){
            document.getElementById('serror').innerHTML = "This Field is required";
            flag=0;
        }else{
            document.getElementById('serror').innerHTML = "";
            flag=1;
        }

        if(flag){
            return true;
        }else{
            return false;
        }
    }
</script> -->
</html>