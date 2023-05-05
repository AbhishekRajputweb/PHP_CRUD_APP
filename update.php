<?php
  
    include("connect.php");

   $id = $_GET['updateid'];
   $sql = "Select * from `crud` where id=$id";
   $result = mysqli_query($connection, $sql);
   $row = mysqli_fetch_assoc($result);
   $name = $row['Name'];
   $email = $row['Email'];
   $mobile = $row['Mobile'];
   $password = $row['password'];         

    if(isset($_POST['submit'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $mobile = $_POST['mobile'];
       $password = $_POST['password'];

       $sql = "update `crud` set id='$id', Name='$name', Email='$email', Mobile='$mobile', password='$password' where id=$id";
       $result = mysqli_query($connection, $sql);
       if($result){
        // echo "Data updated successfully";
        header('location:display.php');

       }else{
        echo "can't connect";
       }
    }
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ======== bootstrap css======= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>CRUD APP</title>
</head>
<body>


      <div class="container my-5">
         <form method="post">
             <legend>Update Deteles</legend>
             <div class="mb-3">
               <label>Name</label>
               <input type="text" name="name" class="form-control" value="<?php echo $name;?>" placeholder="Enter your Name" autocomplete="off">
             </div>
             <div class="mb-3">
               <label>Email</label>
               <input type="Email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Enter your Email" autocomplete="off">
             </div>
             <div class="mb-3">
               <label>Mobile</label>
               <input type="text" name="mobile" class="form-control" value="<?php echo $mobile;?>" placeholder="Enter your Mobile Number" autocomplete="off">
             </div>
             <div class="mb-3">
               <label>Password</label>
               <input type="text" name="password" class="form-control" value="<?php echo $password;?>" placeholder="Enter your Password" autocomplete="off">
             </div>
             <button type="submit" name="submit" class="btn btn-dark">Update</button>
         </form>
      </div>



</body>
</html>