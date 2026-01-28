<?php
$conn=mysqli_connect('localhost','root','','tourist_guide_db');
if($conn){
    echo"connection successful.";
}
else{
    die("Connection failed because :".mysqli_connect_error());
}
?>