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

     <div class="container">
        <button class="btn btn-dark my-5"><a href="index.php" class="text-light">Add user</a></button>
     

     <!-- ===== table ===== -->
     <table class="table">
          <thead class="bg-dark">
            <tr>
              <th class="text-light" scope="col">SL. No.</th>
              <th class="text-light" scope="col">Name</th>
              <th class="text-light" scope="col">Email</th>
              <th class="text-light" scope="col">Mobile</th>
              <th class="text-light" scope="col">Password</th>
              <th class="text-light" scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>

            <?php
                include("connect.php");

                $sql = "Select * from `crud`";
                $result = mysqli_query($connection, $sql);

                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['Name'];
                        $email = $row['Email'];
                        $mobile = $row['Mobile'];
                        $password = $row['password'];
                         
                        echo '<tr>
                                 <th scope="row">'.$id.'</th>
                                     <td>'.$name.'</td>
                                     <td>'.$email.'</td>
                                     <td>'.$mobile.'</td>
                                     <td>'.$password.'</td>
                                     <td>
                                         <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                         <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                                     </td>
                               </tr>';
                    }
                }
            ?>
            
          </tbody>
     </table> 
     
     </div>
</body>
</html>