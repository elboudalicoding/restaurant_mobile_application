
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
     <h1>LOGIN</h1> 
       <?php if(isset($_GET['error'])): ?>
       <p class="error"><?php echo $_GET['error']; ?></p>
       <?php endif; ?>
    <label>Email</label>
    <input type="text" name="email" placeholder="email"><br>
    <label>Password</label>
    <input type="password" name="pwd" placeholder="password"><br>
    <button type="submit">Login</button>
    <a href="signup.php" class="ca"> Create an account </a>
    </form>
</body>
</html>