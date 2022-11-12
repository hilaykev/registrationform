<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration_form');
$txt=$_POST["txt"];
$email=$_POST["email"];
$pswd=$_POST["pswd"];
$s="select * from sign_up where name='$txt'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"User With Such Detail Already Exixt In The System";
}else{
    $reg="insert into sign_up(name,email,pass)values('$txt','$email','$pswd')";
    mysqli_query($con,$reg);
    echo"Your Registration Form Have Been Received";
}

?>