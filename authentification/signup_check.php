<?php
session_start();
include "../database/db_conn.php";
if(isset($_POST['email']) &&  isset($_POST['pwd']) && isset($_POST['username']) &&  isset($_POST['city']) ){
    function validate($data){
        $dataa=trim($data);
        $dataa=stripcslashes($data);
        $dataa=htmlspecialchars($data);
        return $dataa;
    }
    $Email=validate($_POST['email']);
    $password=validate($_POST['pwd']);
    $username=validate($_POST['username']);
    $city=validate($_POST['city']);
    if(empty($Email)){                                                                               
        header("Location:signup.php?error=Email is required ");
        exit();
    }else if(empty($username)){
        header("Location:signup.php?error=Username is required ");
        exit();
    }else
    if(empty($city)){                                                                               
        header("Location:signup.php?error=City is required ");
        exit();
    }else if(empty($password)){
        header("Location:signup.php?error=Password is required ");
        exit();
    } else{
        $sql ="SELECT * FROM signup WHERE email='$Email'";
        $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result)>0){
            header("Location:signup.php?error=The email is taken try another email!");
            exit();
           }
           else{
              $sql2="INSERT INTO signup(username,password,email,ville) VALUES('$username','$password','$Email','$city')";
              $result2=mysqli_query($conn,$sql2);
                    if($result2){
                        header("Location:signup.php?success=Your account has been created successfully");
                        exit();
                    }
                    else{
                        header("Location:signup.php?error=Your account has not  been created ! ");
                        exit();
                    }
           }

     }
}else{
    header("Location:signup.php");
    exit();
}

?>