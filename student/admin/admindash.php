
<style>
body {
  background-color:yellow;
}
.administration{
    background-color:red;
    border:solid 12px;
    margin-left:50px;
    margin-right:50px;
    height:100px;

}
.dashboard{
    border:solid 4px blue;
    margin-left:400px;
    margin-right:400px;
    background-color:lightblue;
   
}
</style>


<?php
 session_start();

     if( $_SESSION['uid'])
     {
         echo $_SESSION['uid'];
     }
     else
     {
          
         header("location: ../login.php");
     }
?>
<html>
<body>
<div class="administration">
<h1 align="center">Welcome to Admin Dashbord</h1>
<h4><a href="logout.php">logout</a></h4>
</div>
 
 <div class="dashboard" align="center">
 <h1> <a href="insert.php"> insert student detail </a> </h1> 
 <h1> <a href="search.php"> search student detail </a> </h1> 
 <h1> <a href="deletestudent.php"> delete student detail </a> </h1>
 </div>
 </body>
 </html>