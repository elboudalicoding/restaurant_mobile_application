<?php
session_start();
include "../database/db_conn.php";
if(isset($_POST['email']) &&  isset($_POST['pwd']) ){
    function validate($data){
        $dataa=trim($data);
        $dataa=stripcslashes($data);
        $dataa=htmlspecialchars($data);
        return $dataa;
    }
    $Email=validate($_POST['email']);
    $password=validate($_POST['pwd']);
    if(empty($Email)){                                                                               
        header("Location:index.php?error=Email is required ");
        exit();
    }else if(empty($password)){
        header("Location:index.php?error=Password is required ");
        exit();
    }else{
        $sql ="SELECT * FROM signup WHERE email='$Email' AND password='$password'";
        $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
 
               if($row['email']===$Email && $row['password']===$password){
                  $_SESSION['username']=$row['username'];
                  $_SESSION['email']=$row['email'];
                  $_SESSION['id']=$row['id'];
                  header("Location: ../navigation/navigBar.php");
                  exit();
               }
           }else{ 
            header("Location:index.php?error= Incorrect Email or password  ");
            exit();
           }
    }
}else{
    header("Location:index.php");
    exit();
}

?>