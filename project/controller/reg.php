
<?php
require_once('../model/config.php');

$name = $username =$repass=$address= $gender = $email = $password = $pwd =$phone= '';


$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$repass=$_POST['repass'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbuser (Name,Username,Phone,Email,Password,Address,Gender) VALUES ('$name','$username','$phone','$email','$password','$address','$gender')";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("Location: ../view/login.php");
}
else
{
    echo "Error :".$sql;
}
?>