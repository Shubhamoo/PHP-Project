<style>
body{
    background-color:yellow; 
}
.administration{
    background-color:red;
    border:solid 12px;
    margin-left:50px;
    margin-right:50px;
    height:100px;
}
</style>
<html>
<body>
<div class="administration">
<h1 align="center">Welcome to Admin Dashbord</h1>
</body>
</div>
 </html>

   
   <html>
   <body>
   <form method="post" action="" align="center">
   <h3>Roll No:</h3>   <input type="number" name="rollno"><br>  
   <h3>name:</h3>      <input type="text" name="sname"><br>
   <h3>city:</h3>      <input type="text" name="city"><br>
   <h3> pcont:</h3>    <input type="text" name="pcont"><br>
   <h3>standard:</h3>  <input type="number" name="standard"><br>
   <h3> image: </h3>   <input type="file" name="image"><br>
                      <input type="submit"  name="submit">                  
   </form>
   </body>
   </html>

<?php
  if(isset($_POST['submit'])){
      include("../conn.php");
      $rollno=$_POST["rollno"];
      $name=$_POST["sname"];
      $city=$_POST["city"];
      $pcont=$_POST["pcont"];
      $standard=$_POST["standard"];
      $qry="INSERT INTO student( rollno, sname, city, pcont, standard) VALUES ('$rollno',' $name','$city','$pcont','$standard')";
      $run=mysqli_query($con,$qry);
      if($run==true){
        ?>
          <script>
          alert("successfullu inserted");
          </script>
        <?php
      }

  }
?>