<?php 
session_start();

if(isset($_SESSION['userid'])){
    print("Welcome ". $_SESSION['username']."!, you are logged in now.");
}
else{
    print("Please login to view this page");
}



?>