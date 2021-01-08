<html>
<head>
</head>
<body>
<h1 align="center">login</h1>
<form action="" method="post" >
<table align="center">
<tr>
<td>username</td><td><input type="text" name="uname" required></td>
</tr>
<tr>
<td>password</td><td><input type="password" name="pass" required></td>
</tr>
<tr>
<td>
<input type="submit" name="login" value="login">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
include ('conn.php');
if(isset($_POST['login']))
{
echo "true";
$username = $_POST["uname"];
$password = $_POST["pass"]; 

 
$sql = "Select * from admin where username='$username' AND pasword='$password'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if ($num < 1){
   echo "something wrong";
   ?>
   <script>
   alert('something wrong');
   </script>
   <?php
} 
else {
  echo " success";
  $data=mysqli_fetch_assoc($result);
  $id=$data['id'];
  session_start();
  $_SESSION['uid']=$id;
  header('location:admin/admindash.php');
}

}
?>