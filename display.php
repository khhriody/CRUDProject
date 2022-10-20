<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <button class="btn btn-success my-5"><a href="user.php"class="text-light">
        ADD Product</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SI No</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Expire_Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql="Select * from product";
     $result=mysqli_query($con,$sql);
     if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $description=$row['description'];
            $quantity=$row['quantity'];
            $price=$row['price'];
            $expire_date=$row['expire_date'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$description.'</td>
            <td>'.$quantity.'</td>
            <td>'.$price.'</td>
            <td>'.$expire_date.'</td>
            <td>
            <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>


            </td>
            </tr> ';
        }
     }


    ?>
  </tbody>
</table>
    </div>
    
</body>
</html>