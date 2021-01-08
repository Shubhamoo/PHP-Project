<html>
<head>
</head>
<body>
 <form action="" method="POST">
 <input type="text" name="id" placeholder="enter id">
   <input type="submit" name="search" value="search">
 </form>
 <?php
 include ('../conn.php');
 if(isset($_POST['search']))
 {
    $id = $_POST['id']; 
  
     
     
     $query="SELECT * FROM student WHERE id='$id' ";
     $result= mysqli_query($con,$query);

     while($row=mysqli_fetch_array($result))
     {
         ?>
         <form action="" method="POST">
         <input type= "text" name="id" value="<?php echo $row['id'] ?>">
         <input type= "text" name="sname" value="<?php echo $row['sname'] ?>">
         <input type= "text" name="city" value="<?php echo $row['city'] ?>">
         
         </form>

         <?php
     }
 }
 ?>
</body>
</html>