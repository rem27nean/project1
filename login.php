<?php
include '_con.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($result);

if($user &&  password_verify($password, $user['password'])){
    echo"Login Successful. Welcome " . $user['full_name'];
} else{
    echo"Invalid email or password";
}
?>