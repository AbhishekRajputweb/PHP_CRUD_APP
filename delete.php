<?php
include("connect.php");

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";

    $result = mysqli_query($connection, $sql);
    if($result){
        // echo "Deleted successfull";
        header("location:display.php");
    }else{
        echo "can't connect";
       }
}
?>