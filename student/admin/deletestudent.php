<html>
<head>
</head>
<body>
 <form action="" method="POST">
 <input type="text" name="id" placeholder="enter id">
   <input type="submit" name="delete" value="delete">
 </form>
 <?php
 include ('../conn.php');
 if(isset($_POST['delete']))
 {
    $id = $_POST['id']; 
  
     
     
     $query="DELETE  FROM student WHERE id='$id' ";
     $result= mysqli_query($con,$query);

     if($result==true)
     {
         echo "deleted";
     }
     else 
     {
       echo "not";
     }
 }
 ?>
</body>
</html>