<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'yourinfo');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$suggest= $_POST['suggest'];

 

$query = "insert into information (name,email,mobile,suggest) values ('$name', '$email', '$mobile', '$suggest')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');


?>