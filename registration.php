<?php 
include ('config.php');
$errors = array('email'=>'','name'=>'','password1'=>'','password2'=>'','match'=>'');
$name = $email = $password1 = $password2 = '';

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
//for name 
if(empty($_POST['name'])){
 $errors['name']= "Name is required";
 }else{
 $name = $_POST['name'];
 if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
 $errors['name']= "Please Input a validated name";
 }
 }
  
 $password1 = $_POST['password1'];
 $password2 = $_POST['password2'];
if(empty($password1)){
$errors['password1']= "Password required";

}    
 if($password1 != $password2){
 $errors['password2']= "Password dose not match";
 }
//check if the email alredy taken
$sql = "SELECT * FROM users WHERE email = '$email' ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
$errors['match'] = "Email is already taken";
}    
// array filter to send data
 if(array_filter($errors)){
 // if have some error
 }else{
 $name = mysqli_real_escape_string($conn,$_POST['name']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $password = mysqli_real_escape_string($conn,$_POST['password1']);
 $password = md5($password);    
 $sql = "INSERT INTO users(name,email,password) VALUE('$name','$email','$password')";
 mysqli_query($conn,$sql);
 echo "You are sucessfully registration";
 }
 
    
    
    
    
   


}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-md-6 offset-md-4">
                <h3 class="my-10 text-primary">Input Your Form</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="form-group">
                        <label>Your Name :</label>
                        <input type="text" placeholder="Your name" class="form-control" name="name" value="<?php echo htmlspecialchars($name) ?>">
                        <p class="text-danger"><?php echo $errors['name'] ?></p>
                    </div>
                    <div class="form-group">
                        <label>Your Email :</label>
                        <input type="text" placeholder="Your email" class="form-control" name="email" value="<?php echo htmlspecialchars($email) ?>">
                        <p class="text-danger"><?php echo $errors['email'] ?></p><p class="text-danger"><?php echo $errors['match'] ?></p>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Your password" name="password1" value="<?php echo htmlspecialchars($password1) ?>">
                        <p class="text-danger"><?php echo $errors['password1'] ?></p>
                        <input type="checkbox" onclick="MyFunction()">Show password
                        
                    </div>
                    <div class="form-group">
                        <label> Confirm password :</label>
                        <input type="password" placeholder="Your Password" class="form-control" id="password" name="password2">
                        <p class="text-danger"><?php echo $errors['password2'] ?></p>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Send-it" name="submit">
                </form>
                <p>Alredy Registered <a href="login.php">Login</a> </p>
            </div>
        </div>
    </div>

    <script>
        function MyFunction(){
        var password = document.getElementById("password");
        if(password.type == "password"){
        password.type = "text";
        }
            else{
            password.type = "password";
            
            }
        
        
        
        
        }
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>






<!--
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password1 = mysqli_real_escape_string($conn,$_POST['password1']);
$password2 = mysqli_real_escape_string($conn,$_POST['password2']);
$sql = "INSERT INTO users(name,email,password) VALUE('$name','$email','$password1')";
mysqli_query($conn,$sql); 
-->











