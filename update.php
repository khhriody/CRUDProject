<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from product where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$description=$row['description'];
$quantity=$row['quantity'];
$price=$row['price'];
$expire_date=$row['expire_date'];

if(isset($_POST['submit'])){
$name=$_POST['name'];
$description=$_POST['description'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$expire_date=$_POST['expire_date'];

$sql="update product set id=$id,name='$name',description='$description',quantity='$quantity',price='$price',expire_date='$expire_date' where id=$id";
$result=mysqli_query($con,$sql);
if($result){
  header('location:display.php');
}else{
  die(mysqli_error($con));
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud project</title>
  </head>
  <body>
    <div class="container" my-5>
    <form method="post">
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label >Description</label>
    <input type="text" class="form-control" placeholder="Say something" name="description"autocomplete="off"value=<?php echo $description;?>>
  </div>
  <div class="mb-3">
    <label >Quantity</label>
    <input type="text" class="form-control" placeholder="Enter Your Amount" name="quantity"autocomplete="off"value=<?php echo $quantity;?>>
  </div>
  <div class="mb-3">
    <label >Price</label>
    <input type="text" class="form-control" placeholder="Enter the Price" name="price"autocomplete="off"value=<?php echo $price;?>>
  </div>
  <div class="mb-3">
    <label >Expire_Date</label>
    <input type="date" class="form-control" placeholder="Enter the expire_date" name="expire_date"autocomplete="off"value=<?php echo $expire_date;?>>
  </div>
  <button type="submit" class="btn btn-danger" name="submit">Update</button>
</form>
</div>

  </body>
</html>