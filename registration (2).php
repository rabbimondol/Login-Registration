<!--
<?php
session_start();
$conn = mysqli_connect('localhost','root','','userweb');
if(!$conn){
echo mysqli_connect_error($conn);
}
$name = $_POST['user'];
$pass = $_POST['password'];
$sql = " SELECT * FROM usertable WHERE name = '$name' ";
$result = mysqli_query($conn,$sql);
$num =  mysqli_num_rows($result);
if($num == 1){
echo "This Account is already created";

}else{

$reg = "INSERT INTO usertable(name, password) VALUES('$name','$pass')";
mysqli_query($conn,$reg);
    echo "successfull ";
}
   

?>




