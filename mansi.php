<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "catmansi";

//create connection
$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

if(!$conn){
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
if(isset($_POST['sign_in'])){
    $username = $_POST['username'];
    $email = $_POST['emailid'];
    $mobile = $_POST['phoneno'];
    $addrress = $_POST['addr'];
    $password = $_POST['pass'];
    echo "<script>alert('$username $email $mobile $addrress $password');</script>";
    if(!empty($username) || !empty($email) || !empty($mobile) || !empty($addrress) || !empty($password)){        
        $SELECT = "SELECT emailid FROM loginform Where emailid='{$email}' Limit 1";
        $INSERT = "INSERT Into loginform(username, emailid, phone, addr, pass) values('{$username}','{$email}',{$mobile},'{$addrress}','{$password}')";
        $row = mysqli_query($conn, $SELECT) or die('Error');
        if(mysqli_num_rows($row)==0){
            mysqli_query($conn, $INSERT) or die('Error');
        }else{
            echo "<script>alert('email id already exist');</script>";
        }
    }
    else { 
        echo "<script>alert('email id already exist');</script>";
        // die();
    }
}
// mysqli_close();
?>