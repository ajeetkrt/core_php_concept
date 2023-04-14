<?php
session_start();
$conn = new mysqli('localhost','root','','test');
//$id = $_SESSION['id'];

$id = $_SESSION['id'];
//print_r($id);
//exit;
$sql = "SELECT * FROM `users` WHERE id='$id'";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
 $row = mysqli_fetch_assoc($res);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <script
  src="https://code.jquery.com/jquery-3.6.2.js">
</script>
</head>
<body>
    <h2>Display Session Value</h2><br>
    <h2>Hello , <?php echo $_SESSION['role']; ?></h2>
    <br>
    <h3>Welcome , <?php echo $_SESSION['name']; ?></h3>

    <button type="submit">Update Details</button>
<div id="hide">
  <h3>Update Login Details</h3>
    <form action="?" method="post">
    <div>
        <label for="inputkey">Username:</label>
        <input type="text" placeholder="Enter UserName" name="user" id="user" value="<?php echo $row['name']; ?>">
        <div id="uerror" class="validation"></div>
    </div>
    <div>
        <label for="inputkey">Password:</label>
        <input type="password" placeholder="Enter Password" name="pass" id="pass" value="<?php echo $row['pass']; ?>">
        <div id="perror" class="validation"></div>
    </div>
    <input type="submit" value="Submit" name="submit">
   
    </form>
    </div>
    <a href="logout1.php">Logout</a>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "UPDATE users SET name='$name', pass='$pass'  WHERE id='$id'";
    $result = mysqli_query($conn, $query);
   
   if($result){
     header("location:login1.php");
   }else{
     echo "Try one more time";
   }
}
?>