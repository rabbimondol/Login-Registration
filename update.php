<?php 
include('config.php');
$sql = "SELECT * FROM order_number";
$result = mysqli_query($conn,$sql);
$contant = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upfate</title>
</head>
<body>
<?php include('resource/header.php'); ?>
 <div class="row">
  
   <div class="container">
       <?php foreach($contant as $contant){ ?>
           
               <div class="col-md-6">
                  <div class="card">
                  <div class="card-content">
                   <h3><?php echo $contant['order_name'] ?></h3>
                   <h3><?php echo $contant['order_number'] ?></h3>
                   <a class="btn btn-primary" href="more.php?id=<?php echo
    $contant['id'] ?>">More info</a>
                   
               </div>
               </div>
               </div>
           
       
       <?php }?>
   </div>
   </div>
