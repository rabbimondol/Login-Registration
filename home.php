<?php 
session_start();
include('config.php');
$er = array('order'=>'','order_number'=>'','ready'=>'');
if(!isset($_SESSION['email'])){
header('Location:login.php');
}
if(isset($_POST['submit'])){
$order_name = $_POST['contant'];
$order_number = $_POST['ordernumber'];    
if(empty($order_name)){
$er['order'] = "Order name required";
}
    else{
    $order_name = $_POST['contant'];    
    if(!preg_match('/^[a-zA-Z\s]+$/',$order_name)){
        
    $er['order'] = "Order name is invilid";
    
    }
    
    }
    if(empty($order_number)){
$er['order'] = "Order name required";
}
    else{  
    if(!preg_match('/^[0-9]*$/',$order_number)){
        
    $er['order_number'] = "Order name is invilid";  
    }   
    }
    
if(array_filter($er)){
//

}
    else{
    $order_name = mysqli_real_escape_string($conn,$order_name);
    $order_number = mysqli_real_escape_string($conn,$order_number);
    $sql = "INSERT INTO order_number(order_name,order_number) VALUE('$order_name','$order_number')" ;
    mysqli_query($conn,$sql);
    echo "sucessfull" . mysqli_error($conn);
    header('Location:update.php');    
                                              
    }
}
?>
<head>
    
</head>
<body>


<?php include('resource/header.php') ?>
<div class="jumbotron jumbotron-fluid">
    <h1 class="text-uppercase text-center display-4" style="">Welcome <?php echo $_SESSION['email'] ?></h1>
    <hr class="my-5">
    <div class="text-center ">
    <a href="logout.php" class="btn btn-primary  py-3" style="opacity:0.8; font-weight:bold;font-size:16px;">Logout</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
               <img src="php.jpg" class="card-img-top img-fluid">
               <div class="card-body">
                   <div class="card-title">
                     <h3>Php</h3>
                     </div> 
                   
                   
                   <div class="card-text">
                       <h3 class="lead">I know how to use </h3>
                   </div>
                   <ul class="list-group">
                       <li class="list-group-item">This is the list</li>
                       <li class="list-group-item">this is the list</li>
                       <li class="list-group-item">this is the list</li>
                   </ul>
                   <div class="card-body">
                       <a class="card-link" href="#">Here</a>
                   </div>
                   </div>
               
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
               <img src="php.jpg" class="card-img-top">
               <div class="card-body">
                  <div class="card-title">
                  <h3>Php</h3> 
                   </div>
                    
                   <div class="card-text">
                       <p class="lead">This is the list if u need</p>
                   </div>
                   <ul class="list-group">
                       <li class="list-group-item">Golam</li>
                       <li class="list-group-item">Golam</li>
                       <li class="list-group-item">Golam</li>
                   </ul>
                   <div class="card-body">
                   <a href="#" class="card-link">Here</a>
              </div>
              </div>
                   
               </div>
                
          
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="php.jpg" class="card-img-top">
                <div class="card-body">
                   <div class="card-title">
                     <h3>Php</h3> 
                   </div>
                   <div class="card-text">
                       <h3 class="lead">I know how to use </h3>
                   </div>
                   <ul class="list-group">
                       <li class="list-group-item">This is the list</li>
                       <li class="list-group-item">this is the list</li>
                       <li class="list-group-item">this is the list</li>
                   </ul>
                   <div class="card-body">
                       <a class="card-link" href="#">Here</a>
                   </div>
            </div>
        </div>
    </div>
</div>
<section class="need-of-user" style="padding:80px;background:#ccc;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-4">
               <h3 class="text-info mb-3" style="font-weight:300">Your Order </h3>
                <form action="home.php" method="post">
                   <div class="form-group">
                       <label>Your Order:</label>
                       <input type="text" name="contant" placeholder="Your order" class="form-control">
                     <p class="lead text-danger"> <?php echo $er['order'] ?></p>
                      <p class="lead text-danger"> <?php echo $er['ready'] ?></p>
                       
                   </div>
                   <div class="form-group">
                       <label>Your Order number :</label>
                       <input type="text" name="ordernumber" placeholder="Your order number " class="form-control">
                   </div>
                   <input type="submit" class="btn btn-primary" value="Send it!" name="submit">
                   
                    
                </form>
            </div>
        </div>
    </div>
</section>



















<!--
<div class="container">
   <?php session_start() ?>
    <?php if(isset($_SESSION['success'])): ?>
    <h4>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h4> 
    
    <?php endif ?>
    <?php if(isset($_SESSION['name'])): ?>
        <h5>Welcome &emsp;<?php echo $_SESSION['name']; ?></h5>
        <p><a href="home.php?logout ='1'" btn btn-sucess>Logout</a> </p>
        
        
        
    <?php endif ?>
    
</div>  
-->
  
  
  
  
  
  
  
  
  
  
   
   
  

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
