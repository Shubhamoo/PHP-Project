<html>
<head>
<title>welcome to student management system</title>
</head>
<body>
<h1 align ="center"> welocome to this page </h1>
<h3 align="right"><a href="login.php"> login page </a> </h3>
<form action="" method="POST">
<table style="width:50%" align="center">
 <tr>
 <td colspan="2" align="center">student information</td>
 </tr>
   <tr>
   <td align="right">Choose Standard</td>
   <td>
   <select name="std" required>
   <option value="1">1st</option>
   <option value="2">2nd</option>
   <option value="3">3rd</option>
   <option value="4">4th</option>
   <option value="5">5th</option>
   <option value="6">6th</option>
   </select>
   </td>
   </tr>
   <tr> 
   <td align="right">Enter Rollno</td>
   <td><Input Type="text" name="rollno" required></td>
   </tr>
   <tr>
   <td colspan="2" align="center"><input type="submit" name="submit" value="show info"></td>
   </tr>

</table>
</form>
</body>
</html>