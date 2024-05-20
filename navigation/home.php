 <?php
 session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    ?>  
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
     <title>Home Page</title>
     <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
     <h1>hello, <?php echo $_SESSION['username'] ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>
<?php   
}else{
    header("Location:index.php");
    exit();
}
?>