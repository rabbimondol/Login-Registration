<?php 
include('config.php');

session_start();

$errors = array('email'=>'','password'=>'','match'=>'');
if(isset($_POST['submit'])){
//for email filter    
 if(empty($_POST['email'])){
 $errors['email']="Email is required";
 }else{
 $email = $_POST['email'];
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 $errors['email']="Please Input a validated email";
 }
 }
// this is for password
 $password = $_POST['password'];
 if(empty($password)){
 $errors['password']="Please Input a Password";
 }    
if(array_filter($errors)){
// show error
}
else
{
$password = md5($password);
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$sql);  
$rows = mysqli_num_rows($result);
if($rows == 1){
$_SESSION['email'] = $email;    
header('Location:home.php');

}else{
$errors['match']="Username is Password not match";

}    


}
    
    
    
    
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   
    <div class="container">
       <div class="row">
        <div class="col-md-6 offset-md-4">
            <h2>Login</h2>
            <h3 class="text-danger"><?php echo $errors['match'] ?></h3>
             <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                 <div class="form-group">
                     <label>Email</label>
                     <input type="text" name="email" placeholder="Your Email" class="form-control">
                     <p class="text-danger"><?php echo $errors['email'] ?></p>
                 </div>
                 <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" placeholder="Your password" id="show" class="form-control">
                     <p class="text-danger"><?php echo $errors['password'] ?></p>
                     <input type="checkbox" onclick="myfunction()"> &emsp; Show password
                 </div>
                 <input type="submit" name="submit" value="Login" class="btn btn-primary">
                 
             </form>
             <p>Not Registered <a href="registration.php">Register</a> </p>
            </div>
        </div>
    </div>
</body>
<script>
function myfunction(){
x = document.getElementById('show');
if(x.type == "password"){
x.type = "text"; 
}else{
x.type = "password";
}    

}
    
</script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>