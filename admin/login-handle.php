<?php 
if($_SERVER['REQUEST_METHOD'] != 'Post'){
    header('location: dashboard.php');
}

$user_email = $_POST['email'];
$user_password = $_POST['password'];

include 'db-conn.php';

$query = "SELECT * FROM user WHERE email=? AND password=?";
$mysql_stmt =  mysqli_prepare($conn,  $query);
mysqli_stmt_bind_param($mysql_stmt,'ss', $user_email, $user_password);
mysqli_stmt_execute($mysql_stmt);
$mysql_result=  mysqli_stmt_get_result($mysql_stmt);

$data =  mysqli_fetch_assoc($mysql_result);



if($data) {

    session_start();
    $_SESSION['is_loggedin'] = true;
    header("Location: dashboard.php");
} else {
    header("Location: index.php?error=email or password incorrect");
}