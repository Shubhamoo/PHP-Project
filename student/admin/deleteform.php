<?php
 include ('../conn.php');
 {
  
     $id=$_REQUEST['sid'];
     
     $query="DELETE  FROM student WHERE id='$id' ";
     $result= mysqli_query($con,$query);

     if($result==true)
     {
         echo "deleted successfully";
     }
 }
 ?>
</body>
</html>