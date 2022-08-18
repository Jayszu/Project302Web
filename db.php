<?php
    $servername="localhost";
    $username="id18542492_userlogin_1234";
    $password="JayWeb@_1122";
    $dbname = "id18542492_userlogin";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
     if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
      
       


?>