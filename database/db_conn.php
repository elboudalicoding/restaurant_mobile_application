<?php 
$sname="localhost";
$uname="root";
$password="";
$db_name="website";
$conn=mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
    echo 'Failed database Connection';
}
?>