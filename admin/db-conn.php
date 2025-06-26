<?php 
$conn = mysqli_connect("localhost", "root", "", "beauty-store", "3306");

if($conn == false){
    echo "Connection Failed";
}