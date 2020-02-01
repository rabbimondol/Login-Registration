<?php 
include('config.php');

if(isset($_POST['delete'])){
$id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
$sql = "DELETE FROM  order_number WHERE id = '$id_to_delete'";   
mysqli_query($conn,$sql);   
header('Location:update.php');


}

if(isset($_GET['id'])){
$id = mysqli_real_escape_string($conn,$_GET['id']);
$sql = "SELECT * FROM order_number WHERE id = '$id' ";
$result = mysqli_query($conn,$sql);
$contant = mysqli_fetch_assoc($result);

}









?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>More info</title>
</head>
<body>
   <?php include('resource/header.php') ?>
   <div class="row">
   <div class="col-md-6 offset-md-5">
   <?php if($contant): ?>
   <h3><?php echo $contant['order_name']  ?></h3>
   <h4><?php echo $contant['order_number'] ?></h4>
   <h5>date <?php echo $contant['order_time'] ?></h5>
    <form action="more.php" method="post">
       <input type="hidden" name="id_to_delete" value="<?php echo $contant['id'] ?>">
       <input type="submit" name="delete" value="delete" class="btn btn-primary">
        
    </form>
    <?php else: ?>
    <h3>ERROR 404</h3>
    <?php endif; ?>
     </div>   
    </div>
</body>
</html>