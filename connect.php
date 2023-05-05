<?php

   $server = "localhost";
   $user = "root";
   $password = "";
   $db_name = "phpcrud";

   $connection = "";
   try{
     $connection = Mysqli_Connect($server , $user, $password, $db_name);
   }catch(mysqli_sql_exception){
    echo "can't connect";
   }


?>